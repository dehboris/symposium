<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Drops the joindin_id column from the conferences table and replaces
 * it with a calling_all_papers_id column.  Data loss will ensue
 */
class DropJoindinAddCap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conferences', function (Blueprint $table) {
            $table->dropColumn('joindin_id');
        });
        Schema::table('conferences', function (Blueprint $table) {
            $table->string('calling_all_papers_id', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conferences', function (Blueprint $table) {
            $table->dropColumn('calling_all_papers_id');
        });
        Schema::table('conferences', function (Blueprint $table) {
            $table->integer('joindin_id')->nullable();
        });
    }
}
