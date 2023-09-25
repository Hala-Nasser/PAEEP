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
            return response()->view('dashboard.auth.two_factory');
        } elseif ($option == "phone") {
            $message = 'كود التحقق الخاص بك هو :' . $code;
            $response = Http::get("http://sms.toopop.tech/sendbulksms.php?user_name=test&user_pass=test&sender=test&mobile=$admin->phone&type=0&text=$message");
            $data = json_decode($response->body());
            switch ($data) {
                case '1000':
                    return response()->json(['message' => 'There is not enough balance'], Response::HTTP_BAD_REQUEST);
                case '2000':
                    return response()->json(['message' => 'Error in authorization process'], Response::HTTP_BAD_REQUEST);
                case '3000':
                    return response()->json(['message' => 'Error in message type'], Response::HTTP_BAD_REQUEST);
                case '4000':
                    return response()->json(['message' => 'One of the required entries does not exist'], Response::HTTP_BAD_REQUEST);
                case '5000':
                    return response()->json(['message' => 'Phone number is not supported'], Response::HTTP_BAD_REQUEST);
                case '6000':
                    return response()->json(['message' => 'Sender name is not recognized on your account'], Response::HTTP_BAD_REQUEST);
                case '1001':
                    return response()->view('dashboard.auth.two_factory');
                default:
                    return response()->json(['message' => 'Error occurred'], Response::HTTP_BAD_REQUEST);
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
            $admin->resetCode();
            return parent::successResponse();
        }
        return response()->json(['message' => "The code is incorrect"], Response::HTTP_BAD_REQUEST);
    }
}
