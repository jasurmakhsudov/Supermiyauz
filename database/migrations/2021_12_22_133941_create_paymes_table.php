<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymes', function (Blueprint $table) {
            $table->string('id');
            $table->string('phone_number')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_expire')->nullable();
            $table->string('token',500)->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymes');
    }
}
