<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonationRequest;
use App\Models\Admin;
use App\Models\Donation;
use App\Models\Program;
use App\Notifications\NewDonationNotification;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function createDonate()
    {
        $programs = Program::all();
        return response()->view('website.donate', compact('programs'));
    }

    public function storeDonate(StoreDonationRequest $request)
    {
         \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $donor_name = $request->get('name');
        $amount = $request->get('amount');
        $two0 = "00";
        $total = "$amount$two0";

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $donor_name,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('donate'),
        ]);

        return redirect()->away($session->url);
        $is_saved = Donation::create($request->getData());
        if($is_saved){
            $admin = Admin::where('email', 'hala.n.nofal@gmail.com')->first();
            $admin->notify(new NewDonationNotification($request['name'], $is_saved->id));
        }
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
}
