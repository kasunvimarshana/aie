<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutcomeablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outcomeables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            //$table->softDeletes();
            $table->boolean('is_visible')->index()->default(null)->nullable()->comment('comment');
            $table->unsignedBigInteger('status_id')->index()->default(null)->nullable()->comment('comment');
            $table->morphs('outcomeable');
            $table->string('name')->index()->default(null)->nullable()->comment('comment');
            
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
        Schema::dropIfExists('outcomeables');
    }
}
