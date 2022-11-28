<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterServantWorshipsTableAddSkillId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servant_worships', function (Blueprint $table) {
            $table->unsignedBigInteger('skill_id')->nullable()->after('servant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servant_worships', function (Blueprint $table) {
            $table->dropColumn('skill_id');
        });
    }
}
