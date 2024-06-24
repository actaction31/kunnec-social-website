<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\SocialChatController;
use App\Http\Controllers\UserNotificationController;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$user=auth()->user();
        print_r(auth()->user());
        $obj=new SocialChatController();
        $unreadCount=$obj->unreadChats(1);
        $common=[
            'unreadCount'=> 0
        ];
        View::share('common',$common);*/
        //compose all the views....
        view()->composer('*', function ($view){
            $totalChats=0;
            $socialChats=0;

            $totalNotifys=0;
            $accountNotify=0;
            $socialNotify=0;
            if(Auth::check()){
                $obj=new SocialChatController();
                $chatCount=$obj->unreadChats(Auth::user()->id);
                $socialChats=$chatCount;
                
                $notifyObj=new UserNotificationController();
                $socialNotify=$notifyObj->getSocialNotifyCount();
                //exit();
            }
            $totalChats=$socialChats;
            $totalNotifys=$accountNotify+$socialNotify;
            $common=(object)[
                'chatCount'=>$totalChats,
                'socialChats'=>$socialChats,
                
                'notifyCount'=>$totalNotifys,
                'accountNotify'=>$accountNotify,
                'socialNotify'=>$socialNotify,
            ];
            $view->with('common',$common);    
        }); 
        Paginator::useBootstrap();
    }
}
