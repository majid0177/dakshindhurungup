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
        Schema::create('kors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sodosso_id')->unsigned();
            $table->foreign('sodosso_id')
                ->references('id')
                ->on('sodossos')
                ->onDelete('cascade');
            $table->string('orthobosor1',12,2)->nullable();
            $table->decimal('amount1')->nullable();
            $table->date('payDate1')->nullable();
            $table->string('paymentMethod1')->nullable();
            $table->string('note1',255)->nullable();
            $table->enum('status1',['paid','due'])->default('due');
            
            $table->string('orthobosor2',12,2)->nullable();
            $table->decimal('amount2')->nullable();
            $table->date('payDate2')->nullable();
            $table->string('paymentMethod2')->nullable();
            $table->string('note2',255)->nullable();
            $table->enum('status2',['paid','due'])->default('due');
            
            $table->string('orthobosor3',12,2)->nullable();
            $table->decimal('amount3')->nullable();
            $table->date('payDate3')->nullable();
            $table->string('paymentMethod3')->nullable();
            $table->string('note3',255)->nullable();
            $table->enum('status3',['paid','due'])->default('due');
            
            $table->string('orthobosor4',12,2)->nullable();
            $table->decimal('amount4')->nullable();
            $table->date('payDate4')->nullable();
            $table->string('paymentMethod4')->nullable();
            $table->string('note4',255)->nullable();
            $table->enum('status4',['paid','due'])->default('due');
            
            $table->string('orthobosor5',12,2)->nullable();
            $table->decimal('amount5')->nullable();
            $table->date('payDate5')->nullable();
            $table->string('paymentMethod5')->nullable();
            $table->string('note5',255)->nullable();
            $table->enum('status5',['paid','due'])->default('due');
            
            $table->decimal('paidTotalAmount')->nullable();
            $table->decimal('dueTotalAmount')->nullable();
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
        Schema::dropIfExists('kors');
    }
};
