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
        Schema::create('trade_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name')->nullable();
            $table->text('address')->nullable();
            $table->string('maliker_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('village')->nullable();
            $table->string('postoffice')->nullable();
            $table->string('thana')->nullable();
            $table->string('zela')->nullable();
            $table->string('present_business')->nullable();
            $table->float('license_fee')->nullable();
            $table->float('bokeya')->nullable();
            $table->float('jorimana')->nullable();
            $table->float('nobayon_fee')->nullable();
            $table->float('vat')->nullable();
            $table->float('total')->nullable();
            $table->date('expire_date')->nullable();
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
        Schema::dropIfExists('trade_licenses');
    }
};
