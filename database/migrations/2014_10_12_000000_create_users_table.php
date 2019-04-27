<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            /*$table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();*/
            
            $table->bigIncrements('id')->comment('comment');
            $table->string('name')->index()->comment('comment');
            $table->string('email')->index()->unique()->comment('comment');
            $table->timestamp('email_verified_at')->nullable()->comment('comment');
            $table->string('password')->comment('comment');
            $table->rememberToken()->comment('comment');
            $table->timestamps();
            $table->boolean('is_visible')->index()->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->index()->default(null)->nullable()->comment('comment');
            //$table->softDeletes();
            $table->text('facebook_link')->default(null)->nullable()->comment('comment');
            $table->text('twitter_link')->default(null)->nullable()->comment('comment');
            $table->text('linkedin_link')->default(null)->nullable()->comment('comment');
            $table->mediumText('short_title')->default(null)->nullable()->comment('comment');
            $table->text('biography')->default(null)->nullable()->comment('comment');
            $table->text('dir_uri')->default(null)->nullable()->comment('uniform resource identifier');
            $table->text('image_uri')->default(null)->nullable()->comment('uniform resource identifier');
            $table->text('stripe_public_key')->default(null)->nullable()->comment('comment');
            $table->text('stripe_secret_key')->default(null)->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
