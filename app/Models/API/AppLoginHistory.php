<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppLoginHistory extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'app_login_history';
    protected $fillable = [
        'customers_check_id',
        'mob_device_unique_id',
        'device_model',
        'device_token',
        'os',
        'os_version',
        'location',
    ];
    public $timestamps = true;
}
