<?php

use App\Models\Product;
use App\Models\SaleInvoice;
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
        Schema::create('sale_invoice_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SaleInvoice::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Product::class)->nullable()->constrained()->nullOnDelete();
            $table->integer('unit_price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_invoice_products');
    }
};
