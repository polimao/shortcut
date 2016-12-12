<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShortcuts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortcuts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ring_id')->index();
            $table->string('name')->comment('快捷键名称');
            $table->string('en_name')->comment('快捷键名称');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shortcuts');
    }
}
