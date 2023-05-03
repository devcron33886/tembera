<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('star_rate')->nullable();
            $table->foreignId('service_id')->references('id')->on('services');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
