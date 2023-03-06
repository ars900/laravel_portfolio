<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('blog_category_id');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('blog_category_id')->references('id')->on('blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
