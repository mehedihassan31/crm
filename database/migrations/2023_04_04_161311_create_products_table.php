<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('payoneer_password')->nullable();
            $table->string('email_password')->nullable();
            $table->string('recovery_email')->nullable();
            $table->string('f_image_link')->nullable();
            $table->string('s_image_link')->nullable();
            $table->string('phone')->nullable();
            $table->string('security_qsn_ans')->nullable();
            $table->text('add_info')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->tinyInteger('status')->default(0)->comment('0=unsold;1=sold;');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
