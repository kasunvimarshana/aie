<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            //$table->softDeletes();
            $table->boolean('is_visible')->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->default(null)->nullable()->comment('comment');
            $table->morphs('resourceable');
            $table->unsignedBigInteger('resource_user_id')->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('source_type_id')->default(null)->nullable()->comment('comment');
            $table->text('source_uri')->default(null)->nullable()->comment('uniform resource identifier');

            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            //$table->foreign('resource_user_id')->references('id')->on('users')->onUpdate('cascade');
            //$table->foreign('source_type_id')->references('id')->on('source_types')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_resources');
    }
}
