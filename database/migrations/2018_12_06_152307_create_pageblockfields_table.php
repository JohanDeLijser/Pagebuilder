<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageblockfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pageblockfields')) {
            Schema::create('pageblockfields', function (Blueprint $table) {
                $table->increments('id');
                $table->string('fieldname');
                $table->string('name');
                $table->string('type');
                $table->integer('pageblockid');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pageblockfields');
    }
}
