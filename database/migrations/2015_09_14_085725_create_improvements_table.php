<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImprovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('improvements', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->string('product');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('importance_id')->unsigned();
            $table->foreign('importance_id')->references('id')->on('importances');
            $table->integer('difficulty_id')->unsigned();
            $table->foreign('difficulty_id')->references('id')->on('difficulties');
            $table->integer('customerSize_id')->unsigned();
            $table->foreign('customerSize_id')->references('id')->on('customer_sizes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('improvements');
    }
}
