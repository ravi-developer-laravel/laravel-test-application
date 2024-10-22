<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserSubscriberController extends Controller
{
    public function storeSubscribe(Request $request, Website $website)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'email' => 'required|email|unique:subscribers,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()->all()], 422);
        }

        $validatedData = $validator->validated();
        $subscriber = Subscriber::create(['email' => $validatedData['email']]);
        $website->subscribers()->attach($subscriber);

        return response()->json(['message' => 'New Subscription record created successfully.']);
    }
}
