<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('profilepic');
            $table->string('briefdescription');
            $table->string('address');
            $table->string('gitlink');
            $table->string('fblink');
            $table->string('twitlink');
            $table->string('lilink');
            $table->string('languages');
            $table->string('about');
            $table->string('interests');
            $table->timestamps();

/* req            
username
profilepic
briefdescription i.e. programmer etc
address
telephone no.
github link
languages
about
interests
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
