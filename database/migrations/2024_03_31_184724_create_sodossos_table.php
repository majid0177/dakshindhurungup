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
        Schema::create('sodossos', function (Blueprint $table) {
            $table->id();
            $table->string("holding_number")->nullable();
            $table->string("khana_prodhaner_name")->nullable();
            $table->string("pitar_nam")->nullable();
            $table->string("matar_nam")->nullable();
            $table->string("shamir_nam")->nullable();
            $table->string("nid");
            $table->string("mobile")->nullable();
            $table->string("jommo_tarik")->nullable();
            $table->string("gender")->nullable();
            $table->string("dhormo")->nullable();
            $table->string("pesha")->nullable();
            $table->string("jatiyota")->nullable();
            $table->string("khanar_sodosso")->nullable();
            $table->string("sodosso_nari")->nullable();
            $table->string("sodosso_purus")->nullable();
            $table->string("sontan")->nullable();
            $table->string("sele")->nullable();
            $table->string("meye")->nullable();
            $table->string("batsorik_ay")->nullable();
            $table->string("gram")->nullable();
            $table->string("word")->nullable();
            $table->string("dakghor")->nullable();
            $table->string("thana")->nullable();
            $table->string("zela")->nullable();
            $table->string("barir_dhoron")->nullable();
            $table->string("paka")->nullable();
            $table->string("adha_paka")->nullable();
            $table->string("kacha")->nullable();
            $table->string("artho_bosor")->nullable();
            $table->decimal("apnar_tax")->nullable();
            $table->string("note")->nullable();
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
        Schema::dropIfExists('sodossos');
    }
};
