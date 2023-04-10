<?php

use App\Models\Customer;
use App\Models\SaleInvoiceProduct;
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
        Schema::create('sale_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class)->nullable()->constrained()->nullOnDelete();
            $table->string('invoice_no')->nullable();
            $table->integer('unit_price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->integer('total_price')->default(0);
            $table->integer('due_amount')->default(0);
            $table->integer('vat')->nullable();
            $table->mediumText('remark')->nullable();
            $table->integer('create_by')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_invoices');
    }
};
