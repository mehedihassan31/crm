<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name' ,
        'email',
        'payoneer_password',
        'email_password' ,
        'recovery_email',
        'f_image_link' ,
        's_image_link' ,
        'phone' ,
        'security_qsn_ans' ,
        'add_info',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
