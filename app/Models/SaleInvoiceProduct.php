<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleInvoiceProduct extends Model
{
    use HasFactory;
    protected $table='sale_invoice_products';

    protected $fillable=[
        'sale_invoice_id',
        'product_id',
        'unit_price',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
