<?php
use Illuminate\Support\Facades\Route;
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
// Route::get('/', 'LandingPageController@comingSoon')->name('comingSoon');
//Route::get('/landing', 'LandingPageController@showLandingPage')->name('landing');
Route::get('/', 'LandingPageController@showLandingPage')->name('landing');
Auth::routes(['verify' => true]);

Route::post('/forgot-password','Auth\ForgotPasswordController@forgetPassword')->name('password.email');
Route::get('/password/security-questions/{username}','Auth\ForgotPasswordController@securityQuestions')->name('password.securityQ');
Route::post('/password/security-verify/{username}','Auth\ForgotPasswordController@securityVerify')->name('pass.securityVerify');

Route::post('/signin', 'Auth\LoginController@signin')->name('signin');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['verified'])->group(function(){
    Route::get('/dashboard', 'HomeController@showUserDashboard')->name('dash');
    //Route::get('/admin', 'HomeController@showAdminDashboard')->name('admin-dash');
    Route::get('account/account/{tab?}', 'UserAccountController@showUserAccount')->name('account');
    Route::post('account/update-location', 'UserAccountController@updateLocation')->name('user.updateloc');
    Route::post('change-password','UserAccountController@changePassword')->name('user.changePassword');
    Route::post('change-paln','UserAccountController@changePlan')->name('user.changePlan');
    Route::get('account/delete-account', 'UserAccountController@deleteUserAccount')->name('user.deleteAccount');
    Route::get('account/account_credits', 'UserAccount_creditsController@showUserAccount_credits')->name('account_credits');
    Route::get('account/account_credithistory', 'UserAccount_credithistoryController@showUserAccount_credithistory')->name('account_credithistory');
    Route::get('account/account_creditsummary', 'UserAccount_creditsummaryController@showUserAccount_creditsummary')->name('account_creditsummary');
    Route::get('/ads/about', 'UserAds_aboutController@showUserAds_about')->name('about');
    Route::get('/ads/setup', 'UserAds_setupController@showUserAds_setup')->name('setup');
    Route::get('/ads/balance', 'UserAds_balanceController@showUserAds_balance')->name('balance');
    
    /**************video instructions*******************/
    Route::get('/tutorial/instruct_vids', 'UserInstruct_VidsController@showUserInstruct_vids')->name('vids');
    
    /**************events*******************/
    Route::get('/events/event_home', 'UserEvents_HomeController@showUserEvents_home')->name('home');
    Route::get('/events/home','EventsController@eventsHome')->name('events.home');
    Route::get('/events/event_list', 'UserEvents_listController@showUserEvents_list')->name('list');
    Route::get('/events/event_search', 'UserEvents_searchController@showUserEvents_search')->name('search');
    Route::get('/events/event_details', 'UserEvents_detailsController@showUserEvents_details')->name('details');
    Route::get('/events/event_create', 'UserEvents_createController@showUserEvents_create')->name('create');
    Route::get('/events/my_events', 'UserMy_eventsController@showUserMy_events')->name('my_events');
    Route::get('/events/my-events','EventsController@userListEvents')->name('events.list');
    Route::get('/events/event-invites','EventInvitesController@userListEventInvites')->name('events.invites');
    Route::get('/events/search','EventsController@eventSearch')->name('events.search');
    Route::get('/events/add-event','EventsController@addEvent')->name('events.add');
    Route::get('/events/edit-event/{event_id}','EventsController@addEvent')->name('events.edit');
    Route::get('/events/details/{event_id}','EventsController@eventDetails')->name('events.eventDetails');
    Route::post('/events/create-event/{event_id?}','EventsController@createEvent')->name('events.createEvent');
    Route::get('/events/invite-request/{invite_id}/{action}', 'EventInvitesController@inviteUserAction')->name('events.inviteUserAction');
    
    /**************chats/messages*******************/
    Route::get('/messages/social-messages/{room_id?}', 'SocialChatController@showChats')->name('messages');
    Route::post('/messages/social/addmessage', 'SocialChatController@apiAddMsg')->name('social.addMessage');
    Route::post('/messages/social/room-chats', 'SocialChatController@roomChats')->name('social.roomChats');
    Route::post('/messages/social/upload-files', 'SocialChatController@uploadChatfiles')->name('social.uploadFiles');

    //Route::get('/messages/messages', 'UserMessageController@showUserMessage')->name('messages');
    Route::get('/messages/message_me', 'UserMessage_meController@showUserMessage_me')->name('message_me');
    Route::get('/messages/message_you', 'UserMessage_youController@showUserMessage_you')->name('message_you');
    Route::get('/messages/message_shop', 'UserMessage_shopController@showUserMessage_shop')->name('message_shop');
    Route::get('/messages/message_pod', 'UserMessage_podController@showUserMessage_pod')->name('message_pod');
    Route::get('/messages/message_screen', 'UserMessage_screenController@showUserMessage_screen')->name('message_screen');
    Route::get('/messages/message_show', 'UserMessage_showController@showUserMessage_show')->name('message_show');
    Route::get('/messages/message_course', 'UserMessage_courseController@showUserMessage_course')->name('message_course');
    Route::get('/messages/message_vid', 'UserMessage_vidController@showUserMessage_vid')->name('message_vid');
    Route::get('/messages/message_music', 'UserMessage_musicController@showUserMessage_music')->name('message_music');
    Route::get('/messages/message_books', 'UserMessage_booksController@showUserMessage_books')->name('message_books');
    
    Route::get('/notifications/{notify_type}', 'UserNotificationController@notifications')->name('notifications');

    //Route::get('/notifications/notifications', 'UserNotificationController@showUserNotification')->name('notificationss');
    Route::get('/notifications/notifications_social', 'UserNotification_socialController@showUserNotification_social')->name('notifications_social');
    Route::get('/notifications/notifications_me', 'UserNotification_meController@showUserNotification_me')->name('notifications_me');
    Route::get('/notifications/notifications_you', 'UserNotification_youController@showUserNotification_you')->name('notifications_you');
    Route::get('/notifications/notifications_shop', 'UserNotification_shopController@showUserNotification_shop')->name('notifications_shop');
    Route::get('/notifications/notifications_pod', 'UserNotification_podController@showUserNotification_pod')->name('notifications_pod');
    Route::get('/notifications/notifications_show', 'UserNotification_showController@showUserNotification_show')->name('notifications_show');
    Route::get('/notifications/notifications_course', 'UserNotification_courseController@showUserNotification_course')->name('notifications_course');
    Route::get('/notifications/notifications_vid', 'UserNotification_vidController@showUserNotification_vid')->name('notifications_vid');
    Route::get('/notifications/notifications_music', 'UserNotification_musicController@showUserNotification_music')->name('notifications_music');
    Route::get('/notifications/notifications_books', 'UserNotification_booksController@showUserNotification_books')->name('notifications_books');
    Route::get('/notifications/notifications_me', 'UserNotification_meController@showUserNotification_me')->name('notifications_me');

    Route::get('/schedule', 'UserScheduleController@showUserSchedule')->name('schedule');
    
    Route::get('/kunnec-to-job/home','JobsController@jobsHome')->name('k2me.jobsHome');
    Route::get('/kunnec-to-job/job-post','JobsController@addJobPost')->name('k2me.addJobPost');
    Route::post('/kunnec-to-job/create-job','JobsController@createJobPost')->name('k2me.createJobPost');
    Route::post('/kunnec-to-job/delete','JobsController@jobDelete')->name('k2me.delete');
    Route::get('/kunnec-to-job/my-jobs','JobsController@myJobs')->name('k2me.myJobs');
    Route::get('/kunnec-to-job/jobs/{cat_id?}/{subcat_id?}','JobsController@AllJobsList')->name('k2me.jobs');
    Route::get('/kunnec-to-job/search','JobsController@AllJobsList')->name('k2me.search');
    Route::get('/kunnec-to-job/job-details/{job_id}','JobsController@jobDetails')->name('k2me.jobDetails');
    
    Route::get('/kunnec-to-job/apply-job/{job_id}','JobApplicantsController@applyJob')->name('k2me.applyJob');
    Route::get('/kunnec-to-job/job/applicants/{job_id}','JobApplicantsController@jobApplicants')->name('k2me.jobApplicants');
    Route::post('/kunnec-to-job/job-applicant/delete','JobApplicantsController@applicantDelete')->name('k2me.applicantDelete');

    Route::get('/kunnec-to-you/profile/{user_id?}','K2YouController@viewProfile')->name('k2u.profile');
    Route::get('/kunnec-to-you/home','K2YouController@ktoYouHome')->name('k2u.home');
    Route::get('/kunnec-to-you/settings/{tab?}','K2YouController@kToYouSettings')->name('k2u.settings');
    Route::post('/kunnec-to-you/profile-setup','K2YouController@profileSetup')->name('k2u.settings.setup');
    Route::post('/kunnec-to-you/createWorkHistory','K2YouController@createWorkHistory')->name('k2u.settings.createWorkHistory');
    Route::post('/kunnec-to-you/add-favorite','K2YouController@addFavorite')->name('k2u.settings.addFavorite');
    Route::post('/kunnec-to-you/add-educationHtml','K2YouController@addEducationHtml')->name('k2u.settings.educationHtml');
    Route::post('/kunnec-to-you/delete-education','K2YouController@deleteEducation')->name('k2u.settings.deleteEducation');
    Route::post('/kunnec-to-you/add-favorite','K2YouController@addToFavourite')->name('k2u.settings.addToFavourite');
    Route::post('/kunnec-to-you/create-Rating','K2YouController@createRating')->name('k2u.settings.createRating');

    Route::get('/kunnec-to-you/list','K2YouController@searchProfiles')->name('k2u.listProfiles');
    Route::post('/kunnec-to-you/add-workHtml','K2YouController@addWorkHtml')->name('k2u.settings.addWorkHtml');
    Route::post('/kunnec-to-you/delete-work','K2YouController@deleteWork')->name('k2u.settings.deleteWork');
    Route::post('/kunnec-to-you/delete-certification','K2YouController@deleteCert')->name('k2u.settings.deleteCert');
    Route::post('/kunnec-to-you/add-certHtml','K2YouController@addCertHtml')->name('k2u.settings.addCertHtml');

    Route::post('/kunnec-to-you/create-Portfolio','K2YouController@createPortfolio')->name('k2u.settings.createPortfolio');
    Route::post('/kunnec-to-you/create-videoPortfolio','K2YouController@createVideoPortfolio')->name('k2u.settings.createVideoPortfolio');
    Route::post('/kunnec-to-you/add-portfolioHtml','K2YouController@addPortfolioHtml')->name('k2u.settings.addPortfolioHtml');
    Route::post('/kunnec-to-you/delete-portfolio','K2YouController@deletePortfolio')->name('k2u.settings.deletePortfolio');

    Route::get('/kunnec-record/home','RecordersController@recordersHome')->name('krecords.home');
    Route::get('/kunnec-record/settings/{tab?}','RecordersController@recorderSettings')->name('krecords.settings');
    Route::post('/kunnec-record/recorder-setup','RecordersController@recorderSetup')->name('krecords.settings.setup');
    Route::post('/kunnec-record/like', 'RecordersController@likeRecorder')->name('krecords.like');
    Route::get('/kunnec-record/search','RecordersController@AllRecorderList')->name('krecords.search');
    Route::get('/kunnec-record/details/{recorder_id}','RecordersController@recorderDetails')->name('krecords.details');
    Route::post('/kunnec-record/create-comment/{recorder_id}', 'RecordersController@createComment')->name('krecords.createComment');


    Route::get('/spot', 'SpotController@spot')->name('spot.home');

    Route::get('/k_me/k2me', 'K2MeController@showUserK2Me')->name('k2me');
    Route::get('/k_me/k2me_list', 'K2MeListController@showUserK2MeList')->name('k2me_list');
    Route::get('/k_me/k2me_post', 'K2MePostController@showUserK2MePost')->name('k2me_post');
    Route::get('/k_me/k2me_create', 'K2MeCreateController@showUserK2MeCreate')->name('k2me_create');
    Route::get('/k_me/k2me_apply', 'K2MeApplyController@showUserK2MeApply')->name('k2me_apply');
    Route::get('/k_me/k2me_f2f', 'K2MeF2FController@showUserK2MeF2F')->name('k2me_f2f');
    Route::get('/k_me/k2me_applicants', 'K2MeApplicantsController@showUserK2MeApplicants')->name('k2me_applicants');
    Route::get('/k_me/k2me_interview', 'K2MeInterviewController@showUserK2MeInterview')->name('k2me_interview');
    Route::get('/k_me/k2me_post-list', 'K2MePostListController@showUserK2MePostList')->name('k2me_post-list');
    Route::get('/k_you/k2u', 'K2YouController@showUserK2You')->name('k2u');
    Route::get('/k_you/k2u_list', 'K2YouListController@showUserK2YouList')->name('k2u_list');
    Route::get('/k_you/k2u_profile', 'K2YouProfileController@showUserK2YouProfile')->name('k2u_profile');
    Route::get('/k_you/k2u_settings', 'K2YouSettingsController@showUserK2YouSettings')->name('k2u_settings');
    Route::get('/k_shop/shop', 'ShopController@showUserShop')->name('shop');
    Route::get('/k_shop/shop_list', 'ShopListController@showUserShopList')->name('shop_list');
    Route::get('/k_shop/shop_receipt', 'ShopReceiptController@showUserShopReceipt')->name('shop_receipt');
    Route::get('/k_shop/shop_details', 'ShopDetailsController@showUserShopDetails')->name('shop_details');
    Route::get('/k_shop/shop_cart', 'ShopCartController@showUserShopCart')->name('shop_cart');
    Route::get('/k_shop/shop_tracking', 'ShopTrackController@showUserShopTrack')->name('shop_tracking');
    Route::get('/k_shop/shop_wlist', 'ShopWListController@showUserShopWList')->name('shop_wlist');
    Route::get('/k_shop/shop_mystore', 'ShopMyStoreController@showUserShopMyStore')->name('shop_mystore');
    Route::get('/k_shop/shop_orders', 'ShopOrdersController@showUserShopOrders')->name('shop_orders');
    Route::get('/k_spot/k_spot', 'SpotHomeController@showUserSpotHome')->name('k_spot');
    // Route::get('/k_spot/k_spot_stream', 'SpotStreamController@showUserSpotStream')->name('k_spot_stream');
    Route::get('/k_shop/shop_settings', 'ShopSettingsController@showUserShopSettings')->name('shop_settings');
    Route::get('/k_course/course', 'CourseController@showUserCourse')->name('course');
    Route::get('/k_course/course_list', 'CourseListController@showUserCourseList')->name('course_list');
    Route::get('/k_course/course_details', 'CourseDetailsController@showUserCourseDetails')->name('course_details');
    Route::get('/k_course/course_room', 'CourseRoomController@showUserCourseRoom')->name('course_room');
    Route::get('/k_course/course_settings', 'CourseSettingsController@showUserCourseSettings')->name('course_settings');
    Route::get('/k_course/course_details_view', 'CourseDetailsViewController@showUserCourseDetailsView')->name('course_details_view');
    Route::get('/k_screen/tutors/tutors', 'TutorsController@showUserTutors')->name('tutors');
    Route::get('/k_screen/tutors/tutors_list', 'TutorsListController@showUserTutorsList')->name('tutors_list');
    Route::get('/k_screen/tutors/tutors_details', 'TutorsDetailsController@showUserTutorsDetails')->name('tutors_details');
    Route::get('/k_screen/tutors/tutors_room', 'TutorsRoomController@showUserTutorsRoom')->name('tutors_room');
    Route::get('/k_screen/tutors/tutors_details_view', 'TutorsDetailViewController@showUserTutorsDetailsView')->name('tutors_details_view');
    Route::get('/k_screen/tutors/tutors_settings', 'TutorsSettingsController@showUserTutorsSettings')->name('tutors_settings');
    
    Route::get('/k_screen/recording/record', 'RecordController@showUserRecord')->name('record');
    Route::get('/k_screen/recording/record_list', 'RecordListController@showUserRecordList')->name('record_list');
    Route::get('/k_screen/recording/record_details', 'RecordDetailsController@showUserRecordDetails')->name('record_details');
    //Route::get('/k_screen/recording/record_room', 'RecordRoomController@showUserRecordRoom')->name('record_room');
    Route::get('/k_screen/recording/record_settings', 'RecordSettingsController@showUserRecordSettings')->name('record_settings');
    Route::get('/k_screen/recording/record_details_view', 'RecordDetailsViewController@showUserRecordDetailsView')->name('record_details_view');
    Route::get('/k_screen/recording/record_apple', 'RecordAppleController@showUserRecordApple')->name('record_apple');
    Route::get('/k_screen/recording/record_windows', 'RecordWindowsController@showUserRecordWindows')->name('record_windows');
    
    Route::get('/k_live/live', 'LiveController@showUserLive')->name('live');
    Route::get('/k_live/live_list', 'LiveListController@showUserLiveList')->name('live_list');
    Route::get('/k_live/live_details', 'LiveDetailsController@showUserLiveDetails')->name('live_details');
    Route::get('/k_live/live_show', 'LiveShowController@showUserLiveShow')->name('live_show');
    Route::get('/k_live/live_channel', 'LiveChannelController@showUserLiveChannel')->name('live_channel');
    Route::get('/k_live/live_recorded', 'LiveRecordedController@showUserLiveRecorded')->name('live_recorded');
    Route::get('/k_live/live_settings', 'LiveSettingsController@showUserLiveSettings')->name('live_settings');
    Route::get('/k_live/live_details_view', 'LiveDetailsViewController@showUserLiveDetailsView')->name('live_details_view');
    Route::get('/k_vid/vid', 'VidController@showUserVid')->name('vid');
    Route::get('/k_vid/vid_list', 'VidListController@showUserVidList')->name('vid_list');
    Route::get('/k_vid/vid_screen', 'VidScreenController@showUserVidScreen')->name('vid_screen');
    Route::get('/k_vid/vid_list', 'VidListController@showUserVidList')->name('vid_list');
    Route::get('/k_vid/vid_channel', 'VidChannelController@showUserVidChannel')->name('vid_channel');
    Route::get('/k_vid/vid_settings', 'VidSettingsController@showUserVidSettings')->name('vid_settings');
    Route::get('/k_book/books', 'BookController@showUserBook')->name('books');
    Route::get('/k_book/book_list', 'BookListController@showUserBookList')->name('book_list');
    Route::get('/k_book/book_details', 'BookDetailsController@showUserBookDetails')->name('book_details');
    Route::get('/k_book/book_cart', 'BookCartController@showUserBookCart')->name('book_cart');
    Route::get('/k_book/book_wlist', 'BookWlistController@showUserBookWlist')->name('book_wlist');
    Route::get('/k_book/book_viewer', 'BookViewerController@showUserBookViewer')->name('book_viewer');
    Route::get('/k_book/book_audio', 'BookAudioController@showUserBookAudio')->name('book_audio');
    Route::get('/k_book/book_receipt', 'BookReceiptController@showUserBookReceipt')->name('book_receipt');
    Route::get('/k_book/book_tracking', 'BookTrackingController@showUserBookTracking')->name('book_tracking');
    Route::get('/k_book/book_settings', 'BookSettingsController@showUserBookSettings')->name('book_settings');
    Route::get('/k_book/book_details_view', 'BookDetailsViewController@showUserBookDetailsView')->name('book_details_view');
    Route::get('/k_book/book_viewer_view', 'BookViewerViewController@showUserBookViewerView')->name('book_viewer_view');
    Route::get('/k_book/book_audio_view', 'BookAudioViewController@showUserBookAudioView')->name('book_audio_view');
    Route::get('/k_music/music', 'MusicController@showUserMusic')->name('music');
    Route::get('/k_music/music_list', 'MusicListController@showUserMusicList')->name('music_list');
    Route::get('/k_music/music_settings', 'MusicSettingsController@showUserMusicSettings')->name('music_settings');
    Route::get('/k_pod/Kpod', 'KpodController@showUserKpod')->name('Kpod');
    Route::get('/k_pod/Kpod_list', 'KpodListController@showUserKpodList')->name('Kpod_list');
    Route::get('/k_pod/Kpod_settings', 'KpodSettingsController@showUserKpodSettings')->name('Kpod_settings');
    Route::get('/k_pod/Kpod_channel', 'KpodChannelController@showUserKpodChannel')->name('Kpod_channel');
    Route::get('/k_task/task', 'KtaskController@showUserKtask')->name('task');
    Route::get('/k_store/store', 'StoreController@showUserStore')->name('store');
    Route::get('/k_store/details', 'DetailsController@showUserDetails')->name('details');
    Route::get('/k_store/women', 'WomenController@showUserWomen')->name('women');
    Route::get('/k_store/men', 'MenController@showUserMen')->name('men');
    Route::get('/k_store/girl', 'GirlController@showUserGirl')->name('girl');
    Route::get('/k_store/boy', 'BoyController@showUserBoy')->name('boy');
    Route::get('/k_store/accessories', 'AccessoriesController@showUserAccessories')->name('accessories');
    Route::get('/photo-editor', 'UserPhotoEditController@showUserPhotoEdit')->name('photo-editor');
    Route::get('/search','UserSearchController@showUserSearch')->name('search');
    Route::get('/profile-search','UserSearchController@profileSearch')->name('profileSearch');
    Route::get('/social/profile/{user_id?}/{tab?}', 'UserProfileController@showUserProfile')->name('profile');

    Route::get('/social/follow-request/{follow_user_id}/{action?}', 'FollowController@followRequest')->name('social.followRequest');

    Route::get('/social/social', 'UserSocialController@showUserSocial')->name('social');
    Route::get('/social/home', 'UserSocialController@socialHome')->name('social.home');
    Route::get('/social/social_list', 'UserSocialListController@showUserSocialList')->name('social_list');
    
    Route::get('/edit-profile/{tab?}', 'UserEditProfileController@showUserEditProfile')->name('edit_profile');
    
    Route::post('/post/delete', 'PostsController@deletePost')->name('post.delete');
    Route::post('/post/create-post/{post_id?}', 'PostsController@createUserPost')->name('post.create');
    Route::get('/post/details/{post_id}', 'PostsController@singelPostDetails')->name('post.details');
    Route::get('/post/edit/{post_id}', 'PostsController@editPost')->name('post.edit');
    Route::post('/post/like', 'PostsController@likePost')->name('post.like');
    Route::post('/post/add-comment', 'PostsController@apiAddComment')->name('post.createComment');
    Route::post('/post-file/delete', 'PostFilesController@deleteFile')->name('postFile.delete');

    Route::post('/snap/delete', 'SnapsController@deleteSnap')->name('snap.delete');
    Route::post('/snap/create-post/{post_id?}', 'SnapsController@createUserSnap')->name('snap.create');
    Route::post('/snap/create-album/{post_id?}', 'SnapsController@createSnapAlbum')->name('snap.createAlbum');
    //Route::get('/snap/details/{post_id}', 'SnapsController@singelPostDetails')->name('snap.details');
    Route::get('/snap/edit/{post_id}', 'SnapsController@editSnap')->name('snap.edit');
    Route::post('/snap/like', 'SnapsController@likeSnap')->name('snap.like');
    Route::post('/snap/add-comment', 'SnapsController@apiAddSnapComment')->name('snap.createComment');
    Route::post('/snap-file/delete', 'SnapsFilesController@deleteFile')->name('snapFile.delete');

    Route::post('/update-profile', 'UserEditProfileController@updateProfile')->name('update_profile');
    Route::get('/may_know', 'UserMayKnowController@showUserMayKnow')->name('may_know');
    Route::get('/trax/daw', 'TraxController@showUserTrax')->name('daw');
    Route::get('/trax/daw2', 'Trax2Controller@showUserTrax2')->name('daw2');
    Route::get('/may-know', 'UserProfileController@userMayKnow')->name('users.mayKnow');
});


Route::get('/register/states/{id?}','Auth\RegisterController@sendStatesByCountry')->name('get.states.by.country');

Route::get('/register/cities/{id?}','Auth\RegisterController@sendCitiesByState')->name('get.cities.by.states');
Route::get('/check-username/{username?}', 'Auth\RegisterController@checkUsername')->name('check.username');

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobCatsController;
use App\Http\Controllers\RecordCatsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobApplicantsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PostsController;

/********* Admin Routes *******/
Route::group(['prefix' =>'admin'],function(){
    Route::group(['middleware' =>'guest:admin'],function(){
        Route::get('/', [AdminController::class,'loginAdmin']);
        Route::get('/login',[AdminController::class,'loginAdmin'])->name('admin.login_form');
        Route::get('/forget-password',[AdminController::class,'forgetPassword'])->name('admin.forgetPassword');
        Route::post('/admin-login', [AdminController::class,'makeLogin'])->name('admin.login');
    });
    Route::group(['middleware' =>'auth:admin'],function(){
        Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout'); 
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name("admin.dashboard");
        Route::get('/users',[UserController::class,'getUsers'])->name("admin.users");  
        Route::get('/users/search/{search_key?}',[UserController::class,'getUsers'])->name("admin.users.search");
        Route::post('/users/status',[UserController::class,'apiUpdateStatus'])->name("admin.users.status");
        
        Route::get('/job-category',[JobCatsController::class,'getAdminAllCats'])->name("admin.jobCats");
        Route::get('/job-category/search/{search_key?}',[JobCatsController::class,'getAdminAllCats'])->name("admin.jobCats.search");
        Route::get('/job-category/add',[JobCatsController::class,'addCat'])->name("admin.jobCats.add");  
        Route::get('/job-category/edit/{cat_id?}',[JobCatsController::class,'addCat'])->name("admin.jobCats.edit");  
        Route::post('/job-category/create/{cat_id?}',[JobCatsController::class,'createCat'])->name("admin.jobCats.create");

        Route::get('/job-subcategory',[JobCatsController::class,'getAdminAllSubCats'])->name("admin.jobSubCats");
        Route::get('/job-subcategory/search/{search_key?}',[JobCatsController::class,'getAdminAllSubCats'])->name("admin.jobSubCats.search");
        Route::get('/job-subcategory/add/{cat_id?}',[JobCatsController::class,'addSubCat'])->name("admin.jobSubCats.add");  
        Route::get('/job-subcategory/edit/{subcat_id?}',[JobCatsController::class,'addSubCat'])->name("admin.jobSubCats.edit");  
        Route::post('/job-subcategory/create/{subcat_id?}',[JobCatsController::class,'createSubCat'])->name("admin.jobSubCats.create");

        Route::get('/jobs',[JobsController::class,'getAdminAllJobs'])->name("admin.jobs");
        Route::get('/jobs/search/{search_key?}',[JobsController::class,'getAdminAllJobs'])->name("admin.jobs.search");
        Route::get('/jobs/applicants/{job_id}',[JobApplicantsController::class,'getAdminAllApplicants'])->name("admin.jobApplicants");

        Route::get('/events',[EventsController::class,'getAdminAllEvents'])->name("admin.events");
        Route::get('/events/search/{search_key?}',[EventsController::class,'getAdminAllEvents'])->name("admin.events.search");

        Route::get('/posts',[PostsController::class,'getAdminAllPosts'])->name("admin.posts");
        Route::get('/posts/search/{search_key?}',[PostsController::class,'getAdminAllPosts'])->name("admin.posts.search");

        Route::get('/record-category',[RecordCatsController::class,'getAdminAllRecordCats'])->name("admin.recordCats");
        Route::get('/record-category/search/{search_key?}',[RecordCatsController::class,'getAdminAllRecordCats'])->name("admin.recordCats.search");
        Route::get('/record-category/add',[RecordCatsController::class,'addCat'])->name("admin.recordCats.add");  
        Route::get('/record-category/edit/{cat_id?}',[RecordCatsController::class,'addCat'])->name("admin.recordCats.edit");  
        Route::post('/record-category/create/{cat_id?}',[RecordCatsController::class,'createCat'])->name("admin.recordCats.create");
            
    }); 
});
/*** Admin Routes End ****/