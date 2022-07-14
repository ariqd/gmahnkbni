<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServantWorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servant_worships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worship_id');
            $table->unsignedBigInteger('servant_id');
            $table->date('assign_date');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servant_worships');
    }
}
