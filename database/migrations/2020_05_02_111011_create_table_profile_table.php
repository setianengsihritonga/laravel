<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('Agama');
            $table->date('TTL');
            $table->integer('NoHandphone');
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
        Schema::dropIfExists('table_profile');

    }
}

// klo bikin file kecil semua ya
