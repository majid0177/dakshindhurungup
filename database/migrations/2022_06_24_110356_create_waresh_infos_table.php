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
        Schema::create('waresh_infos', function (Blueprint $table) {
            $table->id();
            $table->string('union')->nullable();
            $table->string('word_no')->nullable();
            $table->string('village')->nullable();
            $table->string('name')->nullable();
            $table->string('deadbody_value')->nullable();
            $table->string('deadbody_name')->nullable();
            $table->string('son')->nullable();
            $table->string('daughter')->nullable();
            $table->string('guardian_value')->nullable();
            $table->string('guardian')->nullable();
            $table->string('brother_value')->nullable();
            $table->string('brother')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('waresh_infos');
    }
};
