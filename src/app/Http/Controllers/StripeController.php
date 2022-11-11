<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function showSubscription()
    {
        return view('subscription', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function subscription(Request $request)
    {
        $request->user()->newSubscription(
            'default', 'price_1M29JfIgyBxQCq1yO3INknEz'
        )
        ->trialDays(10)
        ->create($request->paymentMethodId);
        return redirect('/subscription');
    }

    public function changeSubscription(Request $request)
    {
        $request->user()->subscription('default')->swap('price_1JjzyoC94s8gJpHeOcm81a2d');
        return redirect('/subscription');
    }

    public function purchase(Request $request)
    {
        $request->user()->charge(
            100, $request->paymentMethodId
        );
        return redirect('/purchase');
    }

    public function invoice(Request $request)
    {
    }
}
