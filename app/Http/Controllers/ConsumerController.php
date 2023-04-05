<?php

namespace App\Http\Controllers;

use App\SDK\ConsumerSDK;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    public function showForm()
    {
        return view('consumer.show');
    }

    public function store(Request $request)
    {
        $consumerSDK = new ConsumerSDK;
        $consumerSDK->saveKeys($request->consumer_key, $request->consumer_secret);

        return response()->json([
            'message' => 'Critical keys saved!',
        ], 200);
        
    }

    public function showKeys()
    {
        $consumerSDK = new ConsumerSDK;
        $keys = $consumerSDK->getKeys();

        return view('consumer.keys', compact('keys'));
    }
}
