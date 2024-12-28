<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabkota extends Model
{
    use HasFactory;
    protected $table = 'kabkotas';
    protected $fillable = ['name','alt_name','latitude','longitude','provinsi_id'];

    function provinsi(){
        return $this->belongsTo(Provinsi::class);
    }
}