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
            
            $table->boolean('is_visible')->index()->default(null)->nullable()->comment('comment');
            $table->string('name')->index()->unique()->comment('comment');
            $table->text('icon_uri')->default(null)->nullable()->comment('uniform resource identifier')->charset('utf8')->change();
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
