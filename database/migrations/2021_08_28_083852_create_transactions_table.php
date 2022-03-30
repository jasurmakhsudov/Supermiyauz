<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_expire')->nullable();;
            $table->string('token',500)->nullable();
            $table->string('amount')->nullable();
            $table->string('status')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('leed_id')->nullable();
            $table->string('referral_id')->nullable();
            $table->string('course_id')->nullable();
            $table->string('invoice_created_time')->nullable();
            $table->string('invoice_pay_time')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
