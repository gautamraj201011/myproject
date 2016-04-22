<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstituencyBlockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constituency_block_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('electionid')->unsigned();
            $table->foreign('electionid')->references('electionid')->on('elections');
            $table->integer('constituencyid')->unsigned();
            $table->foreign('constituencyid')->references('constituencyid')->on('constituency_details');
            $table->string('block');
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
        Schema::drop('constituency_block_details');
    }
}
