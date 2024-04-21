<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wareshgon extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'waresh_infoId',
        'name',
        'relation',
    ];
}
