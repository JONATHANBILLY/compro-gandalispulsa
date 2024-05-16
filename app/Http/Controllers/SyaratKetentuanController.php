<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class SyaratKetentuanController extends Controller
{
    public function syaratketentuan()
    {
        
        return view('template.syaratketentuan',[
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'pay_method' => \App\Models\Method::all()
        ]);
    }
    
    
}