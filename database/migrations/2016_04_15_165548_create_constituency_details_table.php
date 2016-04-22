<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstituencyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituency_details', function (Blueprint $table) {
            $table->increments('constituencyid');
            $table->string('constituencyname');
            $table->integer('electionid')->unsigned();
            $table->foreign('electionid')->references('electionid')->on('elections');
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
        Schema::drop('constituency_details');
    }
}
