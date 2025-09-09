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

        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // link to your users table
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');

            // identifiers
            $table->string('tx_ref')->unique();   // your transaction reference
            $table->string('reference')->nullable(); // provider reference

            // core payment info
            $table->string('event_type')->nullable(); // e.g. checkout.payment
            $table->enum('mode', ['sandbox', 'live'])->default('sandbox');
            $table->string('type')->nullable(); // e.g. API Payment (Checkout)
            $table->string('status')->default('pending');
            $table->unsignedInteger('number_of_attempts')->default(0);

            $table->decimal('amount', 12, 2);
            $table->decimal('charges', 12, 2)->default(0);
            $table->string('currency', 10)->default('MWK');

            // agenda / reason for purchase
            $table->string('agenda')->nullable();

            // method/channel (safe card info only)
            $table->string('method')->nullable(); // Card, MobileMoney, etc.
            $table->string('card_brand')->nullable(); // Mastercard, Visa, etc.
            $table->string('card_last4')->nullable(); // e.g. 0408

            // JSON blobs for extra details
            $table->json('customization')->nullable(); // title, description, logo
            $table->json('logs')->nullable(); // payment logs from provider

            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
