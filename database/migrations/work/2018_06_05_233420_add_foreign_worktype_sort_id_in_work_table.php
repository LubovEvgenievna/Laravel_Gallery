<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignWorktypeSortIdInWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work', function (Blueprint $table) {
            $table->integer('worktype_sort_id')->unsigned()->change();
            $table->foreign('worktype_sort_id')->references('sort_id')->on('worktype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work', function (Blueprint $table) {
            $table->dropForeign('worktype_sort_id');
        });
    }
}
