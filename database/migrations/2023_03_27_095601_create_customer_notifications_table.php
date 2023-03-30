<?php

use App\Models\API\CustomersCheck;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CustomersCheck::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->mediumText('body')->nullable();
            $table->tinyInteger('type')->comment('1=other;2=logout')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_notifications');
    }
};
