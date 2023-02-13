<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            // VERSION 1
            // $table -> bigInteger('user_id') -> unsigned();
            // $table -> foreign('user_id')
            //        -> references('id')
            //        -> on('users');

            // VERSION 2
            $table -> foreignId('person_id') -> constrained();
        });

        Schema::table('person_details', function (Blueprint $table) {
            
            $table->primary('person_id');

            $table -> foreignId('person_id') -> constrained();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
