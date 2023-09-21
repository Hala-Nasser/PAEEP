<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\Admin;
use App\Models\ContactUs;
use App\Notifications\NewContactUsNotification;

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
        if($is_saved){
            $admin = Admin::where('email', 'hala.n.nofal@gmail.com')->first();
            $admin->notify(new NewContactUsNotification($request['full_name'], $is_saved->id));
        }
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }
}
