<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->string('email');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('instagram');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin')->nullable();
            $table->string('google')->nullable();
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
