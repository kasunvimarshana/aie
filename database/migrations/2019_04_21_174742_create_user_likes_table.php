<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_likes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            //$table->softDeletes();
            $table->boolean('is_visible')->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->default(null)->nullable()->comment('comment');
            $table->morphs('likeable');
            $table->unsignedBigInteger('user_id')->default(null)->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_likes');
    }
}
