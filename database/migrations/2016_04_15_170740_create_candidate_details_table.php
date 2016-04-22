<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_details', function (Blueprint $table) {
            $table->integer('candidateid');
            $table->string('candidatename');
            $table->integer('electionid')->unsigned();
            $table->foreign('electionid')->references('electionid')->on('elections');
            $table->integer('constituencyid')->unsigned();
            $table->foreign('constituencyid')->references('constituencyid')->on('constituency_details');
            $table->integer('partyid');
            $table->foreign('partyid')->references('partyid')->on('parties');
            $table->integer('vote');
            $table->primary(array('electionid','partyid','constituencyid'));
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
        Schema::drop('candidate_details');
    }
}
