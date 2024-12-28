<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kabupaten extends Model
{
    use HasFactory;
    protected $table = ('kabupatens');

    protected $fillable = [
        'name',       
        'alt_name',   
        'latitude',   
        'longitude',  
        'regency_id', 
    ];

    function kabkota(){
        return $this->belongsTo(kabkota::class);
    }
}
