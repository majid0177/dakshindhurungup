<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'nid',
        'surname',
        'gram_word',
        'mobile',
        'pic',
        'status'
    ];
}
