<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            //$table->softDeletes();
            $table->boolean('is_visible')->index()->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->index()->default(null)->nullable()->comment('comment');
            $table->text('title')->default(null)->nullable()->comment('comment');
            $table->mediumText('short_description')->default(null)->nullable()->comment('comment');
            $table->text('description')->default(null)->nullable()->comment('comment');
            $table->boolean('is_free')->index()->default(null)->nullable()->comment('comment');
            $table->decimal('price')->index()->default(null)->nullable()->comment('comment');
            $table->boolean('has_discount')->index()->default(null)->nullable()->comment('comment');
            $table->decimal('discount')->index()->default(null)->nullable()->comment('comment');
            $table->text('thumbnail_uri')->default(null)->nullable()->comment('uniform resource identifier');
            
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
        Schema::dropIfExists('courses');
    }
}
