<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('comment');
            $table->timestamps();
            
            $table->boolean('is_visible')->default(null)->nullable()->change()->comment('comment')->charset('utf8');
            $table->string('name')->index()->unique()->comment('comment');
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::enableForeignKeyConstraints();
        //Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('statuses');
    }
}
