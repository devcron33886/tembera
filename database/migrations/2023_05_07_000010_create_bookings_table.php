<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->datetime('check_in_date');
            $table->date('check_out_date')->nullable();
            $table->longText('message')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
