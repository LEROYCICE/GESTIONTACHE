<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColonneAvatarToAuths extends Migration
{

    public function up()
    {
        Schema::table('auths', function (Blueprint $table) {
            $table->string('avatar')->nullable() ;
        });
    }


    public function down()
    {
        Schema::table('auths', function (Blueprint $table) {
            $table->dropColumn('avatar') ;
        });
    }
}
