<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequestRequest;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\StoreJobRequestRequest;
use App\Http\Requests\StoreVolunteerRequestRequest;
use App\Models\CompanyRequest;
use App\Models\ContactUs;
use App\Models\JobRequest;
use App\Models\Program;
use App\Models\VolunteerRequest;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    protected $data = array();

    public function createCompanyRequest()
    {
        return response()->view('website.company-request');
    }

    public function storeCompanyRequest(StoreCompanyRequestRequest $request)
    {
        $is_saved = CompanyRequest::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    public function createJobRequest()
    {
        return response()->view('website.job-request');
    }

    public function storeJobRequest(Request $request, StoreJobRequestRequest $store_request)

    // public function storeJobRequest(Request $request)
    {
        if ($request['page_number'] == 0) {
            $validated = $request->validate([
                'first_name' => 'required|string|min:3|max:30',
                'father_name' => 'required|string|min:3|max:30',
                'grandfather_name' => 'required|string|min:3|max:30',
                'last_name' => 'required|string|min:3|max:30',
                'phone' => 'nullable|numeric',
                'email' => 'required|email',
                'gender' => 'required|string|in:male,female',
                'qualification' => 'required|string',
            ]);
        } elseif ($request['page_number'] == 1) {
            $validated = $request->validate([
                'birthday' => 'required|date',
                'cv' => 'required|file',
            ]);
            if ($validated) {
                $is_saved = JobRequest::create($store_request->getData($request->toArray()));
                return $is_saved ? parent::successResponse() : parent::errorResponse();
            }
        }
    }

    public function createVolunteerRequest()
    {
        return response()->view('website.volunteer-request');
    }

    public function storeVolunteerRequest(StoreVolunteerRequestRequest $request)
    {
        $is_saved = VolunteerRequest::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    public function createContactUs()
    {
        return response()->view('website.contact-us');
    }

    public function storeContactUs(StoreContactUsRequest $request)
    {
        $is_saved = ContactUs::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }


    public function checkout()
    {
        $programs = Program::all();
        return response()->view('website.donate', compact('programs'));
    }

    public function session(StoreDonationRequest $request)
    {
        // \Stripe\Stripe::setApiKey(config('stripe.sk'));

        // // $productname = $request->get('productname');
        // $totalprice = $request->get('amount');
        // $two0 = "00";
        // $total = "$totalprice$two0";

        // $session = \Stripe\Checkout\Session::create([
        //     'line_items'  => [
        //         [
        //             'price_data' => [
        //                 'currency'     => 'USD',
        //                 'product_data' => [
        //                     "name" => "donation",
        //                 ],
        //                 'unit_amount'  => $total,
        //             ],
        //             'quantity'   => 1,
        //         ],

        //     ],
        //     'mode'        => 'payment',
        //     'success_url' => route('success'),
        //     'cancel_url'  => route('checkout'),
        // ]);

        // return redirect()->away($session->url);
        $is_saved = ContactUs::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    // public function success()
    // {
    //     return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    // }

    // public function StoreFile($request, $key)
    // {
    //     $imageName = time() . "" . '.' . $request->file($key)->getClientOriginalExtension();
    //     $request->file($key)->storePubliclyAs('CompanyRequest', $imageName, ['disk' => 'public']);
    //     $request[$key] = 'CompanyRequest/' . $imageName;
    // }

    public function StoreFile($file, $path)
    {
        $imageName = time() . "" . random_int(1, 999999) . '.'  . $file->getClientOriginalExtension();
        $file->storePubliclyAs($path, $imageName, ['disk' => 'public']);
        $file = $path . '/' . $imageName;
        return $file;
    }
}
