<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_a_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('company');
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('telephone');
            $table->string('no_of_pieces');
            $table->string('total_weight');
            $table->string('height');
            $table->string('width');
            $table->string('depth');
            $table->string('commodity');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_a_quotes');
    }
};
