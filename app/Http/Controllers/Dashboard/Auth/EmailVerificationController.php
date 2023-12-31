<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmailVerificationController extends Controller
{
    public function notice(){
        return response()->view('dashboard.auth.email_verify_notice');
    }

    public function send(Request $request){
        $request->user('admin')->sendEmailVerificationNotification();
        return response()->json(['message'=>"Verification email sent"], Response::HTTP_OK);

    }

    public function verify(EmailVerificationRequest $emailVerificationRequest){
        if($emailVerificationRequest->authorize()){
            $emailVerificationRequest->fulfill();
            return redirect('dashboard/two_factory_options');
        }else{
            return response()->json(['message'=>"Email verification is not authorized"], Response::HTTP_BAD_REQUEST);

        }
    }
}
