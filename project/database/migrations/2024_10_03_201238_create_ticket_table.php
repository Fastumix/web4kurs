<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('ticket', function (Blueprint $table) {
        $table->id();
        $table->foreignId('event_id')->constrained();
        $table->foreignId('user_id')->constrained();
        $table->string('seat_number');
        $table->decimal('price', 8, 2);
        $table->dateTime('purchase_date');
        $table->enum('status', ['available', 'sold', 'reserved']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
