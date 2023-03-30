<?php

namespace App\Models\API;

use App\Models\API\AppLoginHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomersCheck extends Model
{
    use HasFactory;
    protected $table = 'customers_checks';
    protected $fillable = [
        'id',
        'username',
        'email',
        'phone',
        'alt_phone',
        'user_crm_id',
        'platform_code',
        'platform_name',
        'login_limit',
        'is_login',
        'is_active',
    ];
    public $timestamps = true;
    protected $hidden = ['created_at', 'updated_at'];

    protected function platformName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }

    public function loginHistory(){
        return $this->hasMany(AppLoginHistory::class,'customers_check_id','id');
    }
}
