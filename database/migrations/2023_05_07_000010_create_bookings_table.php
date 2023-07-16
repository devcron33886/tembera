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
            $table->integer('number_of_people');
            $table->longText('message')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->foreign('package_id', 'package_fk_8404408')->references('id')->on('packages');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
