<?php

namespace App\Http\Controllers\Api\V1\Vonage;

use App\Dto\VonageSmsData;
use App\Http\Controllers\Controller;
use App\Models\Sms;
use Illuminate\Http\Request;

class InboundSmsController extends Controller
{
    public function __invoke(Request $request)
    {
//        dd($request->all());
        $data = VonageSmsData::from($request);
        Sms::create($data->toArray());
    }
}
