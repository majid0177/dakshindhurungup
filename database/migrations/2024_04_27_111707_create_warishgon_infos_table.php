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
        Schema::create('warishgon_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wr_id')->unsigned();
            $table->foreign('wr_id')->references('id')->on('warishes')->onDelete('cascade');
            $table->string('b_slno')->nullable();
            $table->string('b_name')->nullable();
            $table->string('b_relation')->nullable();
            $table->string('b_nid')->nullable();
            $table->string('b_comments')->nullable();
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
        Schema::dropIfExists('warishgon_infos');
    }
};
