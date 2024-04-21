<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Peoples;
class Tax extends Model
{
    use HasFactory;
    protected $fillable =[
        
            'people_id',
            'year1',
            'date1',
            'year2',
            'date2',
            'year3',
            'date3',
            'year4',
            'date4',
            'year5',
            'date5',
            'year6',
            'date6',
            'year7',
            'date7'
            
        ];
        
        public function people(){
           return $this->belongsTo(Peoples::class, 'people_id');
        }
}
