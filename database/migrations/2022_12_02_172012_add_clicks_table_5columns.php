<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClicksTable5columns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->after('password');
            $table->string('age')->after('gender');
            $table->string('height')->after('age');
            $table->string('weight')->after('height');
            $table->string('body')->after('weight');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('password');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('height');
            $table->dropColumn('weight');
        });
    }
}
