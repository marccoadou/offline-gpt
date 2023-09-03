<?php

namespace App\Dto;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;
use Spatie\LaravelData\Transformers\DateTimeInterfaceTransformer;

#[MapOutputName(SnakeCaseMapper::class)]
class VonageSmsData extends Data
{
    public function __construct(
        #[MapInputName('msisdn')]
        public string $senderNumber,
        #[MapInputName('to')]
        public string $receiverNumber,
        #[MapInputName('messageId')]
        public string $vonageMessageId,
        public string $text,
        public string $type,
        #[MapInputName('api-key')]
        public string $apiKey,
        #[MapInputName('message-timestamp'), WithTransformer(DateTimeInterfaceTransformer::class)]
        public Carbon $messageTimestamp,
    ) {
    }
}
