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
        Schema::create('customers_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('alt_phone')->nullable();
            $table->integer('user_crm_id')->nullable();
            $table->string('platform_code')->nullable();
            $table->enum('platform_name', ['gps-server', 'dingi', 'tracksolid','tracksolidpro', 'iothub'])->nullable();
            $table->integer('login_limit')->default(1);
            $table->boolean('is_login')->default(0);
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('customers_checks');
    }
};
