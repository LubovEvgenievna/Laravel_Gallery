<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReadAnswerColunmTableMail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mail', function (Blueprint $table) {
            $table->integer('read');
            $table->integer('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mail', function (Blueprint $table) {
            $table->dropColumn('read');
            $table->dropColumn('answer');
        });
    }
}
