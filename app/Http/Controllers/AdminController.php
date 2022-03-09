<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\News;
use App\Models\Home_Slider;
use App\Models\Notice;
use App\Models\DownloadFile;
use App\Models\LoanForm;
use Validator;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    function index(){

        return view('dashboards.admins.index');
       }
    
       function profile(){
           return view('dashboards.admins.profile');
       }
       function settings(){
           return view('dashboards.admins.settings');
       }

       function updateInfo(Request $request){
           
               $validator = \Validator::make($request->all(),[
                   'name'=>'required',
                   'email'=> 'required|email|unique:users,email,'.Auth::user()->id,
                   'favoritecolor'=>'required',
               ]);

               if(!$validator->passes()){
                   return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
               }else{
                    $query = User::find(Auth::user()->id)->update([
                         'name'=>$request->name,
                         'email'=>$request->email,
                         'favoriteColor'=>$request->favoritecolor,
                    ]);

                    if(!$query){
                        return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
                    }else{
                        return response()->json(['status'=>1,'msg'=>'Your profile info has been update successfuly.']);
                    }
               }
       }



      


       function updatePicture(Request $request){
           $path = 'users/images/';
           $file = $request->file('admin_image');
           $new_name = 'UIMG_'.date('Ymd').uniqid().'.jpg';

           //Upload new image
           $upload = $file->move(public_path($path), $new_name);
           
           if( !$upload ){
               return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
           }else{
               //Get Old picture
               $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

               if( $oldPicture != '' ){
                   if( \File::exists(public_path($path.$oldPicture))){
                       \File::delete(public_path($path.$oldPicture));
                   }
               }

               //Update DB
               $update = User::find(Auth::user()->id)->update(['picture'=>$new_name]);

               if( !$upload ){
                   return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
               }else{
                   return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
               }
           }
       }


       function changePassword(Request $request){
           //Validate form
           $validator = \Validator::make($request->all(),[
               'oldpassword'=>[
                   'required', function($attribute, $value, $fail){
                       if( !\Hash::check($value, Auth::user()->password) ){
                           return $fail(__('The current password is incorrect'));
                       }
                   },
                   'min:8',
                   'max:30'
                ],
                'newpassword'=>'required|min:8|max:30',
                'cnewpassword'=>'required|same:newpassword'
            ],[
                'oldpassword.required'=>'Enter your current password',
                'oldpassword.min'=>'Old password must have atleast 8 characters',
                'oldpassword.max'=>'Old password must not be greater than 30 characters',
                'newpassword.required'=>'Enter new password',
                'newpassword.min'=>'New password must have atleast 8 characters',
                'newpassword.max'=>'New password must not be greater than 30 characters',
                'cnewpassword.required'=>'ReEnter your new password',
                'cnewpassword.same'=>'New password and Confirm new password must match'
            ]);

           if( !$validator->passes() ){
               return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
           }else{
                
            $update = User::find(Auth::user()->id)->update(['password'=>\Hash::make($request->newpassword)]);

            if( !$update ){
                return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update password in db']);
            }else{
                return response()->json(['status'=>1,'msg'=>'Your password has been changed successfully']);
            }
           }
       }
       function show(){
            $sliders = Home_Slider::all();
           return view('dashboards.admins.slidershow',['sliders'=>$sliders]);
       }
       function addSlider(){
           return view('dashboards.admins.addsliders');
       } 
       public function Upload(Request $request){
       
           $image = $request->file('file');
           $imageName = time().'.'.$image->extension();
           $image->move(public_path('./asset/img/slider'), $imageName);
           $status= $request->status;
           $upload = new Home_Slider();
           $upload->status=$status;
           $upload->image=$imageName;
           $upload->save();
           Toastr::success('Slide added successfully','Success');
           return redirect()->route('admin.addsliders');
           
        }
        public function deleteSlide($id){
            $slide = Home_Slider::find($id);
            unlink(public_path('./asset/img/slider').'/'.$slide->image);
            $slide->delete();
            Toastr::warning('Slide deleted successfully','Deleted');
            return redirect()->route('admin.slidershow');
        }
        function noticeIndex(){
            return view('dashboards.admins.addnotice');
        }
        public function noticeStore(Request $request)
    {
        $notice = new Notice;
        $notice->description = $request->description;
        $notice->save();
        Toastr::success('Notice added successfully','Success');
        return redirect()->route('admin.addnotice');
    }
    function showNotice(){
        $shownotice = Notice::all();
       return view('dashboards.admins.shownotice',['shownotice'=>$shownotice]);
   }
   public function NewsShow(){
    $shownews = News::all();
    return view('dashboards.admins.shownews',['shownews'=>$shownews]);
   }
   public function addNews(){
    return view('dashboards.admins.addnews');
   }
   public function PostNews(Request $request){
    $image = $request->file('file');
    $imageName = time().'.'.$image->extension();
    $image->move(public_path('./asset/img/news'), $imageName);
    $title= $request->title;
    $description=$request->description;
    $posts = new News();
    $posts->image=$imageName;
    $posts->title=$title;
    $posts->description=$description;
    $posts->save();
    Toastr::success('News posted successfully','Success');
    return redirect()->route('admin.addnews');
   }
   public function deleteNews($id){
    $news = News::find($id);
    unlink(public_path('./asset/img/news').'/'.$news->image);
    $news->delete();
    Toastr::warning('News Deleted successfully','Delete');
    return redirect()->route('admin.shownews');
}
public function editNews($id){
    $edit = DB::table('news')->where('id',$id)->first();
    return view('dashboards.admins.editnews',['edit'=>$edit]);
    }
    public function UpdateNews(Request $request, $id){
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('./asset/img/news'), $imageName);
       DB::table('news')->where('id', $id)->update([
        'image'=>$imageName,
        'title'=>$request->title,
        'description'=>$request->description,
       ]);
       Toastr::success('News Update successfully','Success');
       return redirect()->route('admin.shownews');
    }
    function showSingleNews($id){
        
        $news = DB::table('news')->where('id',$id)->first();
        return view('livewire.single-news',['news'=>$news]);
        }
        function getDate(){
            return News::all();
        }
        function showAddDownload(){
            return view('dashboards.admins.adddownload');
        }
        function UploadFile(Request $request){
            $data = new DownloadFile();
            $data->title = $request->title;
            $file=$request->file;
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('./asset/img/download/',$filename);
            $data->file = $filename;
            $data->save();
            Toastr::success('File Uploaded successfully','Success');
            return redirect()->route('admin.adddownload');
        }
        function ShowLoanForm()
        {
            $loansform = LoanForm::orderBy('id',"DESC")->paginate(10);
           
            return view('dashboards.admins.loanapplyform',['loansform'=>$loansform]);
        }
        public function editNoticePage($id)
    {
        $noticeedit = Notice::find($id);

        return view('dashboards.admins.editnotice',compact('noticeedit'));
    }

    public function editNotice(Request $request, $id)
    {
        $request->validate([
            
            'description' => 'required',
        ]);

        Notice::where('id',$id)->update(['description'=>$request->description]);
        Toastr::success('Notice updated successfully','Updated');
        return redirect()->route('admin.addnotice');
    }
    function CustomerAbout(){
        return view('dashboards.admins.customer-about');
    }
       
}
