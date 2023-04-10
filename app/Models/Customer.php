<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=[
        'name' ,
        'email',
        'phone',
        'alt_phone',
        'address',
        'image',
        'dob',
        'create_by',
    ];
    public function user(){
        return $this->belongsTo(User::class,'create_by','id');
    }
}
