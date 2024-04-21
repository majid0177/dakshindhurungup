<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Backend\Tax;

class Peoples extends Model
{
    use HasFactory;
    protected $fillable=[
            'area',
            'word',
            'union',
            'upazila',
            'district',
            'pageno',
            'acessment',
            'holding',
            'homeowner',
            'fname',
            'nid',
            'mobile',
            'members',
            'yearly',
            'tax',
            'due',
            'tubewell',
            'sanitation',
            'hometype',
            'occupation',
            'allowance',
            'remark'
            
        ];
        
        
        public function mytax(){
           return $this->hasOne(Tax::class, 'people_id', 'id');
        }
}
