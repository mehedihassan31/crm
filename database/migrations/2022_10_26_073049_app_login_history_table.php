<?php

use App\Models\API\CustomersCheck;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_login_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignIdFor(CustomersCheck::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('mob_device_unique_id')->nullable();
            $table->string('device_token');
            $table->string('device_model')->nullable();
            $table->enum('os', ['android', 'ios', 'windows'])->default('android');
            $table->string('os_version')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('app_login_history');
    }
};
