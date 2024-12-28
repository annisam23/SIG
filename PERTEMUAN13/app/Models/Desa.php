<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';
    protected $fillable = ['name','alt_name','latitude','longitude','district_id'];

    function kabupaten(){
        return $this->belongsTo(kabupaten::class);
    }
}
