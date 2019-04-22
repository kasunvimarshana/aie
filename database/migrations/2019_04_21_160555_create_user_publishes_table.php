<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPublishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_publishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            //$table->softDeletes();
            $table->boolean('is_visible')->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->default(null)->nullable()->comment('comment');
            $table->morphs('publishable');
            $table->unsignedBigInteger('publish_user_id')->default(null)->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            //$table->foreign('publish_user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_publishes');
    }
}
