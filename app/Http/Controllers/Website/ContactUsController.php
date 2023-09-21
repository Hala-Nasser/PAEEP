<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    protected $data = array();

    public function createContactUs()
    {
        return response()->view('website.contact-us');
    }

    public function storeContactUs(StoreContactUsRequest $request)
    {
        $is_saved = ContactUs::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }
}
