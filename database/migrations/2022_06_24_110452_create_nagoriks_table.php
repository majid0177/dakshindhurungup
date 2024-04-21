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
        Schema::create('nagoriks', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('village')->nullable();
            $table->string('postoffice')->nullable();
            $table->string('thana')->nullable();
            $table->string('zela')->nullable();
            $table->string('nagorikotto_union')->nullable();
            $table->string('word_no')->nullable();
            $table->string('voterId_no')->nullable();
            $table->string('dob_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->text('picture')->nullable();
            $table->date('dob')->nullable();
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
        Schema::dropIfExists('nagoriks');
    }
};
