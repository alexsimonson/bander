<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_user', function (Blueprint $table) {
            $table->primary(['user_id_first', 'user_id_second']);
            $table->unsignedInteger('user_id_first')->comment('the person who liked first (initiates the match');
            $table->unsignedInteger('user_id_second')->comment('the person who liked second (solves the match)');
            $table->boolean('still_matched')->comment('true if still matched, false if somebody unmatches');
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
        Schema::dropIfExists('user_user');
    }
}
