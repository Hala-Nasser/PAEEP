<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OTP;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class TwoFactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sendCode($option)
    {
        $admin = auth('admin')->user();
        // $admin->generateCode();
        $code = $admin->code;
        if ($option == "email") {
            Mail::to([$admin])->send(new OTP($admin, $code));
            $to = $admin->email;
            return response()->view('dashboard.auth.two_factory', compact('to','option'));
        } elseif ($option == "phone") {
            $message = 'كود التحقق الخاص بك هو :' . $code;
            $response = Http::get("http://sms.toopop.tech/sendbulksms.php?user_name=test&user_pass=test&sender=test&mobile=$admin->phone&type=0&text=$message");
            $data = json_decode($response->body());
            switch ($data) {
                case '1000':
                    return response()->json(['message' => trans('two_factory.not_enough_balance')], Response::HTTP_BAD_REQUEST);
                case '2000':
                    return response()->json(['message' => trans('two_factory.authorization_error')], Response::HTTP_BAD_REQUEST);
                case '3000':
                    return response()->json(['message' => trans('two_factory.error_message_type')], Response::HTTP_BAD_REQUEST);
                case '4000':
                    return response()->json(['message' => trans('two_factory.entries_not_exist')], Response::HTTP_BAD_REQUEST);
                case '5000':
                    return response()->json(['message' => trans('two_factory.phone_not_supported')], Response::HTTP_BAD_REQUEST);
                case '6000':
                    return response()->json(['message' => trans('two_factory.sender_name_error')], Response::HTTP_BAD_REQUEST);
                case '1001':
                    $to = $admin->phone;
                    return response()->view('dashboard.auth.two_factory', compact('to','option'));
                default:
                    return response()->json(['message' => trans('two_factory.error_occurred')], Response::HTTP_BAD_REQUEST);
            }
        }
    }

    public function ShowTwoFactoryOptions()
    {
        return response()->view('dashboard.auth.two_factory_options');
    }

    public function checkCode(Request $request)
    {
        $admin = auth('admin')->user();
        if ($request['code'] == $admin->code) {
            if ($admin->expire_at < now()) {
                return response()->json(['message' => trans('two_factory.code_expire')], Response::HTTP_BAD_REQUEST);
            } else {
                $admin->resetCode();
                return parent::successResponse();
            }
        }
        return response()->json(['message' => trans('two_factory.incorrect_code')], Response::HTTP_BAD_REQUEST);
    }


    public function resendCode($option){
        $admin = auth('admin')->user();
        $admin->generateCode();
        $code = $admin->code;
        if ($option == "email") {
            Mail::to([$admin])->send(new OTP($admin, $code));
            $to = $admin->email;
            return response()->json(['message' => trans('two_factory.sent_successfully')], Response::HTTP_OK);
        } elseif ($option == "phone") {
            $message = 'كود التحقق الخاص بك هو :' . $code;
            $response = Http::get("http://sms.toopop.tech/sendbulksms.php?user_name=test&user_pass=test&sender=test&mobile=$admin->phone&type=0&text=$message");
            $data = json_decode($response->body());
            switch ($data) {
                case '1000':
                    return response()->json(['message' => trans('two_factory.not_enough_balance')], Response::HTTP_BAD_REQUEST);
                case '2000':
                    return response()->json(['message' => trans('two_factory.authorization_error')], Response::HTTP_BAD_REQUEST);
                case '3000':
                    return response()->json(['message' => trans('two_factory.error_message_type')], Response::HTTP_BAD_REQUEST);
                case '4000':
                    return response()->json(['message' => trans('two_factory.entries_not_exist')], Response::HTTP_BAD_REQUEST);
                case '5000':
                    return response()->json(['message' => trans('two_factory.phone_not_supported')], Response::HTTP_BAD_REQUEST);
                case '6000':
                    return response()->json(['message' => trans('two_factory.sender_name_error')], Response::HTTP_BAD_REQUEST);
                case '1001':
                    $to = $admin->phone;
                    return response()->json(['message' => trans('two_factory.sent_successfully')], Response::HTTP_OK);
                default:
                    return response()->json(['message' => trans('two_factory.error_occurred')], Response::HTTP_BAD_REQUEST);
            }
        }
    }
}
