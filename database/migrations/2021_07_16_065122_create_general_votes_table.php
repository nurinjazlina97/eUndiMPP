<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('identification_number_student');
            $table->unsignedInteger('identification_number_gcandidate');
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
        Schema::dropIfExists('general_votes');
    }
}
