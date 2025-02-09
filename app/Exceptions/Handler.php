<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    /*public function report(Exception $exception)
    {
        parent::report($exception);
    }*/
    
    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    /*public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }*/

     protected function unauthenticated($request, AuthenticationException $exception)
    {
        $response_data=["success"=>0,"message"=>"invalid token or user session has expired!"];
        if ($request->expectsJson()) {
            return response()->json($response_data, 401);
        }
        $guards=$exception->guards();
        $guard ="";
        if($guards){
            $guard =$guards[0];
        }
        switch ($guard) {
            case 'admin':
                $login = 'admin.login_form';
                break;
            case 'api':
                return response()->json($response_data, 401);
                break; 
            case 'web':
                $login = 'landing';
                break;
            default:
                $login = 'login';
                break;
        }
        return redirect()->guest(route($login));
    }
}
