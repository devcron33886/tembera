<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('body');
            $table->string('status')->nullable();
            $table->foreignId('author_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
