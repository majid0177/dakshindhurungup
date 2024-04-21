<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nagorik extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'date',
        'name',
        'father_name',
        'mother_name',
        'village',
        'postoffice',
        'thana',
        'zela',
        'nagorikotto_union',
        'word_no',
        'voterId_no',
        'dob_no',
        'phone_no',
        'picture',
        'dob',
    ];
}
