<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            //$table->softDeletes();
            $table->boolean('is_visible')->index()->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->index()->default(null)->nullable()->comment('comment');
            $table->text('title')->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('section_id')->index()->default(null)->nullable()->comment('comment');
            //$table->unsignedBigInteger('resource_id')->index()->default(null)->nullable()->comment('comment');
            $table->text('summary')->default(null)->nullable()->comment('comment');
            $table->text('thumbnail_uri')->default(null)->nullable()->comment('uniform resource identifier');
            $table->unsignedBigInteger('order')->index()->default(0)->nullable()->comment('comment');
            
            //$table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            //$table->foreign('section_id')->references('id')->on('course_sections')->onUpdate('cascade');
            //$table->foreign('resource_id')->references('id')->on('user_resources')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_lessons');
    }
}
