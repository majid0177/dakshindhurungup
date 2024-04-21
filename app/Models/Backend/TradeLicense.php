<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeLicense extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'organization_name',
        'address',
        'maliker_name',
        'father_name',
        'village',
        'postoffice',
        'thana',
        'zela',
        'present_business',
        'license_fee',
        'bokeya',
        'jorimana',
        'nobayon_fee',
        'vat',
        'total',
        'expire_date',
    ];
}
