<?php

namespace App\SDK;
use App\Models\Consumer;
class ConsumerSDK
{
   
    public function saveKeys($consumerKey, $consumerSecret)
    {
        $consumer = new Consumer;
        $consumer->consumer_key = $consumerKey;
        $consumer->consumer_secret = $consumerSecret;
        $consumer->save();
    }

    public function getKeys()
    {
        $consumer = Consumer::first();
        return [
            'consumer_key' => $consumer->consumer_key,
            'consumer_secret' => $consumer->consumer_secret,
        ];
    }
}