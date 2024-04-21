<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WareshInfo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'union',
        'word_no',
        'village',
        'name',
        'deadbody_value',
        'deadbody_name',
        'son',
        'daughter',
        'guardian_value',
        'guardian',
        'brother_value',
        'brother',
        'total'
    ];
}
