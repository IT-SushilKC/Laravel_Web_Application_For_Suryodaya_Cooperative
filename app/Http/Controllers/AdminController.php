<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Membership;
use App\Models\News;
use App\Models\Home_Slider;
use App\Models\LoanUser;
use App\Models\Notice;
use App\Models\DownloadFile;
use App\Models\LoansForm;
use App\Models\AboutShow;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Team;
use App\Notifications\RepliedToThread;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Mail; 

class AdminController extends Controller
{
	public function index(Request $request)
	{
		$contact = Contact::orderBy('id', "DESC")->simplePaginate(10);
		$countuser = User::all();
		$adminuser = User::orderBy('id', "DESC")->simplePaginate(10);
		return view('dashboards.admins.index', ['adminuser' => $adminuser, 'countuser' => $countuser,'contact'=>$contact]);
	}
	public function profile()
	{
		return view('dashboards.admins.profile');
	}
	public function settings()
	{
		return view('dashboards.admins.settings');
	}
	public function updateInfo(Request $request)
	{
		$validator = \Validator::make(
			$request->all(),
			[
				'user' => 'required',
				'email' => 'required|email|unique:users,email,' . Auth::user()->id,
				'favoritecolor' => 'required',
			]
		);

		if (!$validator->passes()) {
			return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
		} else {
			$query = User::find(Auth::user()->id)->update(
				[
					'user' => $request->user,
					'email' => $request->email,
					'favoriteColor' => $request->favoritecolor,
				]
			);

			if (!$query) {
				Toastr::warning('Something went wrong.', 'Wrong');
				
			} else {
				Toastr::success('Your profile info has been update successfuly.', 'Success');
			}
		}
	}
	function updatePicture(Request $request)
	{
		$path = 'users/images/';
		$file = $request->file('admin_image');
		$new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

           //Upload new image
		$upload = $file->move(public_path($path), $new_name);

		if (!$upload) {
			return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
		} else {
               //Get Old picture
			$oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

			if ($oldPicture != '') {
				if (\File::exists(public_path($path . $oldPicture))) {
					\File::delete(public_path($path . $oldPicture));
				}
			}

               //Update DB
			$update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

			if (!$upload) {
				return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
			} else {
				return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
			}
		}
	}

	function changePassword(Request $request)
	{
           //Validate form
		$validator = \Validator::make(
			$request->all(),
			[
				'oldpassword' => [
					'required', function($attribute, $value, $fail) {
						if (!\Hash::check($value, Auth::user()->password)) {
							return $fail(__('The current password is incorrect'));
						}
					},
					'min:8',
					'max:30'
				],
				'newpassword' => 'required|min:8|max:30',
				'cnewpassword' => 'required|same:newpassword'
			],
			[
				'oldpassword.required' => 'Enter your current password',
				'oldpassword.min' => 'Old password must have atleast 8 characters',
				'oldpassword.max' => 'Old password must not be greater than 30 characters',
				'newpassword.required' => 'Enter new password',
				'newpassword.min' => 'New password must have atleast 8 characters',
				'newpassword.max' => 'New password must not be greater than 30 characters',
				'cnewpassword.required' => 'ReEnter your new password',
				'cnewpassword.same' => 'New password and Confirm new password must match'
			]
		);

		if (!$validator->passes()) {
			return redirect()->back()->with('status', "Required All");
		} else {
			$update = User::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

			if (!$update) {
				Toastr::warning('Something went wrong, Failed to update password in db', 'Warning');
				
			} else {
				Toastr::success('Your password has been changed successfully', 'Success');
				
			}
		}
	}
	function show()
	{
		$sliders = Home_Slider::all();
		return view('dashboards.admins.slidershow', ['sliders' => $sliders]);
	}
	function addSlider()
	{
		return view('dashboards.admins.addsliders');
	}
	public function Upload(Request $request)
	{
		$image = $request->file('file');
		$imageName = time() . '.' . $image->extension();
		$image->move(public_path('./asset/img/slider'), $imageName);
		$status = $request->status;
		$upload = new Home_Slider();
		$upload->status = $status;
		$upload->image = $imageName;
		$upload->save();
		Toastr::success('Slide added successfully', 'Success');
		return redirect()->route('admin.addsliders');
	}
	public function deleteSlide($id)
	{
		$slide = Home_Slider::find($id);
		unlink(public_path('./asset/img/slider') . '/' . $slide->image);
		$slide->delete();
		Toastr::warning('Slide deleted successfully', 'Deleted');
		return redirect()->route('admin.slidershow');
	}
	function noticeIndex()
	{
		return view('dashboards.admins.addnotice');
	}
	public function noticeStore(Request $request)
	{
		$notice = new Notice;
		$notice->description = $request->description;
		$notice->save();
		Toastr::success('Notice added successfully', 'Success');
		return redirect()->route('admin.addnotice');
	}
	function showNotice()
	{
		$shownotice = Notice::all();
		return view('dashboards.admins.shownotice', ['shownotice' => $shownotice]);
	}
	public function NewsShow()
	{
		$shownews = News::all();
		return view('dashboards.admins.shownews', ['shownews' => $shownews]);
	}
	public function addNews()
	{
		return view('dashboards.admins.addnews');
	}
	public function PostNews(Request $request)
	{
		$image = $request->file('file');
		$imageName = time() . '.' . $image->extension();
		$image->move(public_path('./asset/img/news'), $imageName);
		$title = $request->title;
		$description = $request->description;
		$posts = new News();
		$posts->image = $imageName;
		$posts->title = $title;
		$posts->description = $description;
		$posts->save();
		Toastr::success('News posted successfully', 'Success');
		return redirect()->route('admin.addnews');
	}
	public function deleteNews($id)
	{
		$news = News::find($id);
		unlink(public_path('./asset/img/news') . '/' . $news->image);
		$news->delete();
		Toastr::warning('News Deleted successfully', 'Delete');
		return redirect()->route('admin.shownews');
	}
	public function editNews($id)
	{
		$edit = DB::table('news')->where('id', $id)->first();
		return view('dashboards.admins.editnews', ['edit' => $edit]);
	}
	public function UpdateNews(Request $request, $id)
	{
		$image = $request->file('file');
		$imageName = time() . '.' . $image->extension();
		$image->move(public_path('./asset/img/news'), $imageName);
		DB::table('news')->where('id', $id)->update(
			[
				'image' => $imageName,
				'title' => $request->title,
				'description' => $request->description,
			]
		);
		Toastr::success('News Update successfully', 'Success');
		return redirect()->route('admin.shownews');
	}
	function showSingleNews($id)
	{
		$news = DB::table('news')->where('id', $id)->first();
		return view('livewire.single-news', ['news' => $news]);
	}
	function getDate()
	{
		return News::all();
	}
	function showAddDownload()
	{
		return view('dashboards.admins.adddownload');
	}
	function UploadFile(Request $request)
	{
		$data = new DownloadFile();
		$data->title = $request->title;
		$file = $request->file;
		$filename = time() . '.' . $file->getClientOriginalExtension();
		$request->file->move('./asset/img/download/', $filename);
		$data->file = $filename;
		$data->save();
		Toastr::success('File Uploaded successfully', 'Success');
		return redirect()->route('admin.adddownload');
	}
	public function ShowDownload(){
		$data= DownloadFile::all();
		return view('dashboards.admins.showdownload',compact('data'));
	}
	function downloadDelete($id){
		$downloads = DownloadFile::find($id);
		unlink(public_path('./asset/img/download') . '/' . $downloads->file);
		$downloads->delete();
		Toastr::warning('File Deleted successfully', 'Delete');
		return redirect()->route('admin.showdownload');
	}
	function ShowLoanForm()
	{
		$loansform = DB::table('users')
			->join('loans_forms', 'users.id', '=', 'loans_forms.user_id')
			->select('users.user','users.email','loans_forms.loan','loans_forms.phone','loans_forms.peraddress','loans_forms.tempaddress','loans_forms.objective', 'loans_forms.id')
			->orderBy('loans_forms.id','desc')
			->get();
		return view('dashboards.admins.loanapplyform', ['loansform' => $loansform]);
	}
	public function editNoticePage($id)
	{
		$noticeedit = Notice::find($id);
		return view('dashboards.admins.editnotice', compact('noticeedit'));
	}

	public function editNotice(Request $request, $id)
	{
		$request->validate(
			[
				'description' => 'required',
			]
		);
		Notice::where('id', $id)->update(['description' => $request->description]);
		Toastr::success('Notice updated successfully', 'Updated');
		return redirect()->route('admin.addnotice');
	}
	public function CustomerAbout($id)
	{
		$loansabout = DB::table('users')
		
			->join('loans_forms', 'users.id', '=', 'loans_forms.user_id')
			->where('loans_forms.id', $id)
			->select('users.user','users.email','loans_forms.loan','loans_forms.image','loans_forms.created_at','loans_forms.provience','loans_forms.city','loans_forms.phone','loans_forms.peraddress','loans_forms.tempaddress','loans_forms.objective', 'loans_forms.id')
			->first();
		return view('dashboards.admins.customer-about', ['loansabout' => $loansabout]);
	}
	public function LoanshowForm(){
		if( Auth::check() && Auth::user()->role == 2){
            return view('livewire.loansform');
        }else{
            return redirect()->route('login');
        }
	}
	public function LoanForm(Request $request)
	{
		$request->validate(
			[
				'loan' => 'required',
				'phone' => ['required', 'min:9', 'max:11'],
				'city' => ['required', 'string'],
				'provience' => 'required',
				'peraddress' => ['required', 'string'],
				'tempaddress' => ['required', 'string'],
				'objective' => ['required', 'string'],
				'image' => 'required',
			]
		);

		$user = new LoansForm();
		$user->loan = $request->loan;
		$user->phone = $request->phone;
		$user->city = $request->city;
		$user->provience = $request->provience;
		$user->peraddress = $request->peraddress;
		$user->peraddress = $request->peraddress;
		$user->tempaddress = $request->tempaddress;
		$user->objective = $request->objective;
		$image = $request->file('image');
		$imageName = time() . '.' . $image->extension();
		$image->move(public_path('./asset/img/loans'), $imageName);
		$user->image = $imageName;
		$user->user_id = Auth::user()->id;
		$user->save();
		return redirect('/loansform')->with('loanmsg', 'Successfully Send Message');
	}
	public function AboutShow()
	{
		$abouthome = AboutShow::all();
		return view('dashboards.admins.showhomeabout', ['abouthome' => $abouthome]);
	}
	
	public function showSmsPage($id){
		$smsphone =  DB::table('users')
		->join('loans_forms', 'users.id', '=', 'loans_forms.user_id')
		->where('loans_forms.id', $id)
		->select('loans_forms.phone')
		->first();
		return view('dashboards.admins.send-sms',['smsphone'=>$smsphone]);
	}
	public function send(Request $request,$id){
	
		if(request()->isMethod("post")){
			$to = request("phone");
			$from = getenv("TWILIO_FROM");
			$message = request('message');
			//open connection
	
			$ch = curl_init();
	
			//set the url, number of POST vars, POST data
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERPWD, getenv("TWILIO_SID").':'.getenv("TWILIO_TOKEN"));
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_URL, sprintf('https://api.twilio.com/2010-04-01/Accounts/'.getenv("TWILIO_SID").'/Messages.json', getenv("TWILIO_SID")));
			curl_setopt($ch, CURLOPT_POST, 3);
			curl_setopt($ch, CURLOPT_POSTFIELDS, 'To='.$to.'&From='.$from.'&Body='.$message);
	
			// execute post
			$result = curl_exec($ch);
			$result = json_decode($result);
			
			// close connection
			curl_close($ch);
			//Sending message ends here
		}
		Toastr::success('Message Send successfully', 'Success');
		return redirect('admin/loanapplyform');
		
	}
	public function GalleryShow(){
		$gallery = Gallery::simplePaginate(4);
		return view('dashboards.admins.galleryshow',['gallery'=>$gallery]);
	}
	public function GalleryEdit($id){
		$galleryupdate = DB::table('galleries')->where('id', $id)->first();
		return view('dashboards.admins.galleryedit',['galleryupdate'=>$galleryupdate]);
	}

	public function GalleryAdd(){
		return view('dashboards.admins.galleryadd');
	}
	public function GalleryUpload(Request $request){
		
		$image = $request->image;
		$imageName = time() . '.' . $image->getClientOriginalExtension();
		$request->image->move('./asset/img/gallery/', $imageName);
		$posts = new Gallery();
		$posts->image = $imageName;
		$posts->title = $request->title;
		$posts->save();
	
		Toastr::success('Gallery Addes successfully', 'Success');
		return redirect()->route('admin.galleryshow');
	}
	function GalleryDelete($id){
		$gallery = Gallery::find($id);
		unlink(public_path('./asset/img/gallery') . '/' . $gallery->image);
		$gallery->delete();
		Toastr::warning('Gallery Deleted successfully', 'Delete');
		return redirect()->route('admin.galleryshow');
	}
	
public function ContactForm(){
	return view('livewire.contact-livewire');
}
public function SendData(Request $request)
    {
		$request->validate(
			[
				'name' => 'required',
				'email' => ['required'],
				'subject' => ['required', 'string'],
				'message' => 'required',
				
			]
		);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
		$contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

		$input = $request->all();

        Contact::create($input);

		\Mail::send('livewire/contactMail', array( 

            'name' => $input['name'], 
            'email' => $input['email'], 
            'subject' => $input['subject'], 
            'message' => $input['message'], 

        ), function($message) use ($request){ 

            $message->from($request->email); 

            $message->to('sushilkc2060@gmail.com', 'Admin')->subject($request->get('subject')); 

        }); 
        return redirect()->route('livewire.contact-livewire')->with('contactmsg', 'Your Message has been Send, Successfully');
    }
	function Addteam(){
		return view('dashboards.admins.teamadd');
	}
	function AddTeams(Request $request){
		$request->validate(
			[
				'name' => 'required',
				'post' => ['required'],
				'salary' => ['required', 'string'],
				'age' => 'required',
				'image'=>'required'
				
			]
		);
        $team = new Team;
        $team->name = $request->name;
        $team->post = $request->post;
		$team->salary = $request->salary;
        $team->age = $request->age;
		$image = $request->file('image');
		$imageName = time() . '.' . $image->extension();
		$image->move(public_path('./asset/img/Team'), $imageName);
		$team->image = $imageName;
        $team->save();
		Toastr::success('Team Member Add successfully', 'Success');
		return redirect()->route('admin.teamadd');
	}
	function TeamShow(){
		$team = Team::all();
		return view('dashboards.admins.teamshow',['team'=>$team]);
	}
	function TeamMemberDelete($id){
		$team = Team::find($id);
		unlink(public_path('./asset/img/Team') . '/' . $team->image);
		$team->delete();
		Toastr::warning('Gallery Deleted successfully', 'Delete');
		return redirect()->route('admin.teamshow');
		
	}
	function TeamMemberShow($id){
		$team = Team::find($id);
		return view('dashboards.admins.editteams',['team'=>$team]);
	}
	public function TeamMemberEdit(Request $request,$id){

		DB::table('teams')->where('id', $id)->update(
			[
			
				'name' => $request->name,
				'post' => $request->post,
				'salary' => $request->salary,
				'age' => $request->age,
			]
		);
		Toastr::success('Gallery Updated successfully', 'Success');
		return redirect()->route('admin.teamshow');

		
	}
	public function editShow($id)
	{
		$editabout = DB::table('about_shows')->where('id', $id)->first();
		return view('dashboards.admins.about', ['editabout' => $editabout]);
	}
	public function editAboutShow(Request $request, $id)
	{
		
		AboutShow::where('id', $id)->update(['parag' => $request->parag]);
	}
	function membershipAdd(){
		$membership = Membership::all();
		return view('dashboards.admins.membershipadd',['membership'=>$membership]);
	}
	function AddMembership(Request $request){
		$request->validate(
			[
				'name' => 'required',
				'post' => ['required'],
				'image'=>'required'
				
			]
		);
        $membership = new Membership;
        $membership->name = $request->name;
        $membership->post = $request->post;
		$image = $request->file('image');
		$imageName = time() . '.' . $image->extension();
		$image->move(public_path('./asset/img/Membership'), $imageName);
		$membership->image = $imageName;
        $membership->save();
		Toastr::success('Add successfully', 'Success');
		return redirect()->route('admin.membershipadd');
	}
	function MemberShip(){
		$membership = Membership::all();
		return view('dashboards.admins.showmembership',['membership'=>$membership]);
	}

	function ShowContact(){
		$message = Contact::simplePaginate(10);
		return view('dashboards.admins.contact',['messages'=>$message]);
	}
}