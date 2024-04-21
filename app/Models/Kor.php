<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sodosso;
class Kor extends Model
{
    use HasFactory;
    protected $guarded =[];
    function sodosso(){
        return $this->belongsTo(Sodosso::class,'sodosso_id','id');
    }
}
