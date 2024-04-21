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
        Schema::create('taxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id');
            $table->string('year1')->nullable();
            // $table->date('date1')->nullable();
            $table->string('year2')->nullable();
            // $table->date('date2')->nullable();
            $table->string('year3')->nullable();
            // $table->date('date3')->nullable();
            $table->string('year4')->nullable();
            // $table->date('date4')->nullable();
            $table->string('year5')->nullable();
            // $table->date('date5')->nullable();
            $table->string('year6')->nullable();
            // $table->date('date6')->nullable();
            $table->string('year7')->nullable();
            // $table->date('date7')->nullable();
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
        Schema::dropIfExists('taxes');
    }
};
