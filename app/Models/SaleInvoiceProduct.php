<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleInvoiceProduct extends Model
{
    use HasFactory;
    protected $table='sale_invoice_products';

    protected $fillable=[
        'sale_invoice_id',
        'product_id',
        'unit_price',
    ];
}
