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
        Schema::create('peoples', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('area')->nullable();
            $table->string('word')->nullable();
            $table->string('union')->nullable();
            $table->string('upazila')->nullable();
            $table->string('district')->nullable();
            $table->string('pageno')->nullable();
            
            $table->string('acessment')->nullable();
            $table->string('holding')->nullable();
            $table->string('homeowner')->nullable();
            $table->string('fname')->nullable();
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->string('members')->nullable();
            $table->float('yearly')->nullable();
            $table->float('tax')->nullable();
            $table->float('due')->nullable();
            $table->string('tubewell')->nullable();
            $table->string('sanitation')->nullable();
            $table->string('hometype')->nullable();
            $table->string('occupation')->nullable();
            $table->string('allowance')->nullable();
            $table->string('remark')->nullable();
            
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
        Schema::dropIfExists('peoples');
    }
};
