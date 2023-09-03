<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sms', static function (Blueprint $table) {
            $table->ulid();
            $table->string('sender_number');
            $table->string('receiver_number');
            $table->string('vonage_message_id');
            $table->string('text');
            $table->string('type');
            $table->string('api_key');
            $table->string('message_timestamp');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vonage_sms');
    }
};
