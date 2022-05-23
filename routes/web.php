<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\LoansComponent;
use App\Http\Livewire\LoansApplyFormComponent;
use App\Http\Livewire\NewsComponent;
use App\Http\Livewire\DownloadLivewire;
use App\Http\Livewire\GalleryComponent;
use App\Http\Livewire\MissionComponent;
use App\Http\Livewire\ChairmanMessageComponent;
use App\Http\Livewire\ManagerMessageComponent;
use App\Http\Livewire\MembershipComponent;
use App\Http\Livewire\ManagementTeamComponent;
use App\Http\Livewire\SavingComponent;
use App\Http\Livewire\AmbulanceServices;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => [App\Http\Controllers\LanguageController::class,'switchLang']]);

Route::get('/', HomeComponent::class)->name('/');
Route::get('about',AboutComponent::class)->name('/about');
Route::get('/loans', LoansComponent::class)->name('/loans');
Route::get('/news', NewsComponent::class)->name('/news');
Route::get('/downloads', DownloadLivewire::class)->name('/downloads');
Route::get('/gallery', GalleryComponent::class)->name('/gallery');
Route::get('/mission',MissionComponent::class)->name('/mission');
Route::get('/chairmanmsg',ChairmanMessageComponent::class)->name('/chairmanmsg');   
Route::get('/managermsg',ManagerMessageComponent::class)->name('/managermsg'); 
Route::get('/managementteam',ManagementTeamComponent::class)->name('/managementteam'); 
Route::get('/membership',MembershipComponent::class)->name('/membership'); 
Route::get('/saving',SavingComponent::class)->name('/saving');       
Route::get('/amb',AmbulanceServices::class)->name('/amb');       
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

Route::get('contact',[AdminController::class, 'ContactForm'])->name('livewire.contact-livewire');
Route::post('contact',[AdminController::class, 'SendData'])->name('livewire.contact-livewire');
Route::get('loansform',[AdminController::class, 'LoanshowForm'])->name('livewire.loansform');
Route::post('loansform',[AdminController::class, 'LoanForm'])->name('livewire.loansform');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('/');
Route::get('single-news/{id}', [AdminController::class, 'showSingleNews']);
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){


        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');


        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');

        //Home Slider Web
        Route::get('slidershow',[AdminController::class,'show'])->name('admin.slidershow');
        Route::get('addsliders',[AdminController::class,'addSlider'])->name('admin.addsliders');
        Route::post('addsliders',[AdminController::class,'Upload']);
        Route::get('delete/{id}', [AdminController::class, 'deleteSlide'])->name('admin.delete');

        //Notice Web 
        Route::get('addnotice', [AdminController::class, 'noticeIndex']);
        Route::post('addnotice', [AdminController::class, 'noticeStore'])->name('admin.addnotice');   
        Route::get('shownotice', [AdminController::class, 'showNotice'])->name('admin.shownotice'); 
        Route::get('editnotice/{id}', [AdminController::class, 'editNoticePage']);
        Route::post('editnotice/{id}', [AdminController::class, 'editNotice'])->name('admin.editnotice');  

        //Home News
        Route::get('shownews', [AdminController::class, 'NewsShow'])->name('admin.shownews');
        Route::get('addnews', [AdminController::class, 'addNews'])->name('admin.addnews');
        Route::post('addnews', [AdminController::class, 'PostNews']);
        Route::get('editnews/{id}', [AdminController::class, 'editNews']);
        Route::post('editnews/{id}', [AdminController::class, 'UpdateNews'])->name('admin.editnews');
        Route::get('deletenews/{id}', [AdminController::class, 'deleteNews'])->name('admin.deletenews');

        //Download
        Route::get('adddownload', [AdminController::class, 'showAddDownload'])->name('admin.adddownload');
        Route::get('showdownload', [AdminController::class, 'ShowDownload'])->name('admin.showdownload');
        Route::get('deletedownload/{id}', [AdminController::class, 'downloadDelete'])->name('admin.deletedownload');
        Route::post('uploadfile', [AdminController::class, 'UploadFile'])->name('admin.uploadfile');
        Route::post('showfile', [AdminController::class, 'ShowFilwDownload'])->name('admin.showfile');
        Route::get('loanapplyform', [AdminController::class, 'ShowLoanForm'])->name('admin.loanapplyform');


        //Customer About
        Route::get('customer-about/{id}',[AdminController::class, 'CustomerAbout'])->name('admin.customer-about');

        //About
        Route::get('showhomeabout',[AdminController::class, 'AboutShow'])->name('admin.showhomeabout');
        Route::get('about/{id}',[AdminController::class, 'editShow'])->name('admin.about');
        Route::get('about/{id}',[AdminController::class, 'editAboutShow'])->name('admin.about');


        //SMS Send
        Route::get('send-sms/{id}',[AdminController::class, 'showSmsPage'])->name('admin.send-sms');
        Route::post('send-sms/{id}',[AdminController::class,'send']);


        //Gallery
        Route::get('galleryshow',[AdminController::class, 'GalleryShow'])->name('admin.galleryshow');
        Route::get('galleryadd',[AdminController::class, 'GalleryAdd'])->name('admin.galleryadd');
        Route::post('galleryadd',[AdminController::class, 'GalleryUpload'])->name('admin.galleryadd');
        Route::get('galleryedit/{id}',[AdminController::class, 'GalleryEdit'])->name('admin.galleryedit');
        Route::post('galleryedit/{id}',[AdminController::class, 'GalleryUpdate'])->name('admin.galleryedit');
        Route::get('galleryshow/{id}',[AdminController::class, 'GalleryDelete'])->name('admin.galleryedit');


        Route::get('teamadd',[AdminController::class, 'Addteam'])->name('admin.teamadd');
        Route::post('teamadd',[AdminController::class, 'AddTeams'])->name('admin.teamadd');
        Route::get('teamshow',[AdminController::class, 'TeamShow'])->name('admin.teamshow');
        Route::get('deleteteam/{id}', [AdminController::class, 'TeamMemberDelete'])->name('admin.deleteteam');
        Route::post('editteam/{id}', [AdminController::class, 'TeamMemberEdit'])->name('admin.editteam');
        Route::get('editteam/{id}', [AdminController::class, 'TeamMemberShow'])->name('admin.editteamshow');


        Route::get('membershipadd',[AdminController::class, 'membershipAdd'])->name('admin.membershipadd');
        Route::post('membershipadd',[AdminController::class, 'AddMembership'])->name('admin.membershipadd');
        Route::get('showmembership',[AdminController::class, 'MemberShip'])->name('admin.showmembership');
        Route::get('deletemembership/{id}', [AdminController::class, 'MembershipDelete'])->name('admin.deletemembership');
        Route::post('editmembership/{id}', [AdminController::class, 'MembershipEdit'])->name('admin.editmembership');
        Route::get('editmembership/{id}', [AdminController::class, 'MembershipShow'])->name('admin.editmembership');

        Route::get('contact',[AdminController::class, 'ShowContact'])->name('admin.contact');
});

Route::group(['prefix'=>'user','middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('/',[UserController::class,'index'])->name('/');
    
});
