<?php

namespace App\Models;

use App\Models\SaleInvoiceProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleInvoice extends Model
{
    use HasFactory;
    protected $table='sale_invoices';
    public function Customer(){
        return $this->belongsTo(Customer::class);
    }
    public function sales_product(){
        return $this->hasMany(SaleInvoiceProduct::class,'sale_invoice_id','id');
    }
}
