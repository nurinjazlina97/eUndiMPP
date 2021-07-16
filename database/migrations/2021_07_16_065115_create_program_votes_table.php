<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('identification_number_student');
            $table->unsignedInteger('identification_number_pcandidate');
            $table->string('program');
            $table->string('winners');
            $table->unsignedInteger('vote_count');
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
        Schema::dropIfExists('program_votes');
    }
}
