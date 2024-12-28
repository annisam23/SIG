<?php

namespace App\Http\Controllers;
use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index(){
        $list_Kabupaten = kabupaten::all();
        return view('kabupaten.index',[
            'list_kabupaten' => $list_Kabupaten
        ]);
    }
}