<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotingStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voting_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voterid')->unsigned();
            $table->foreign('voterid')->references('voterid')->on('voter_details');
            $table->integer('electionid')->unsigned();
            $table->foreign('electionid')->references('electionid')->on('elections');
            $table->boolean('status');
            $table->integer('token');
            $table->boolean('Estatus');
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
        Schema::drop('voting_statuses');
    }
}
