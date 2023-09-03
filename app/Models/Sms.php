<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sms extends Model
{
    use HasUlids, SoftDeletes;

    protected $fillable = [
        'sender_number',
        'receiver_number',
        'vonage_message_id',
        'text',
        'type',
        'api_key',
        'message_timestamp'
    ];
}
