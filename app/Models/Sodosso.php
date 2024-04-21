<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sodosso extends Model
{
    use HasFactory;
    protected $guarded =[] ;
    
    public function kor(){
        return $this->belongsTo(Kor::class,'id','sodosso_id');
    }
}
