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
        Schema::create('warishes', function (Blueprint $table) {
            $table->id();
            $table->string('ap_name')->nullable();
            $table->string('nid')->nullable(); // Remove auto_increment from here
            $table->string('birth_id')->nullable(); // Remove auto_increment from here
            $table->string('father')->nullable();
            $table->string('husband')->nullable();
            $table->string('mother')->nullable();
            $table->string('dob')->nullable();
            $table->enum('marital_status', ['married', 'unmarried']);
            $table->string('mobile')->nullable();
            $table->string('holding')->nullable();
            $table->string('ward')->nullable();
            $table->string('post_office')->nullable();
            $table->string('village')->nullable();
            $table->string('wr_name')->nullable();
            $table->string('wr_nid')->nullable();
            $table->string('wr_father')->nullable();
            $table->string('wr_husband')->nullable();
            $table->string('wr_mother')->nullable();
            $table->string('wr_ward')->nullable();
            $table->string('wr_village')->nullable();
            $table->string('details', 255)->nullable();
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
        Schema::dropIfExists('warishes');
    }
};
