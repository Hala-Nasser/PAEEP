<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function successResponse(string $message_en = 'Operation Ran Successfully!', string $message_ar = 'تمت العملية بنجاح')
    {
        // dd( LaravelLocalization::getCurrentLocale() == "en");
        return response()->json([
            'message' => LaravelLocalization::getCurrentLocale() == "en" ? $message_en : $message_ar,
        ], Response::HTTP_OK);
    }

    public static function errorResponse(string $message_en = 'Something went wrong, Please try again.', string $message_ar = 'فشلت العملية, يرجى المحاولة مرة أخرى')
    {
        return response()->json([
            'message' => LaravelLocalization::getCurrentLocale() == "en" ? $message_en : $message_ar,
        ], Response::HTTP_BAD_REQUEST);
    }

    public function storeFile($request, $key, $location)
    {
        if ($request->hasFile($key)) {
            $fileName = time() . "" . '.' . $request->file($key)->getClientOriginalExtension();
            $request->file($key)->storePubliclyAs($location, $fileName, ['disk' => 'public']);
            $file_name = $location . '/' . $fileName;

            // $request_data[$key] = $file_name;
            return $file_name;
        }
    }
}
