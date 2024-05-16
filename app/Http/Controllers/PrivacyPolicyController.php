<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;


class PrivacyPolicyController extends Controller
{
    public function privacypolicy()
    {
        
        return view('template.privacypolicy',[
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'pay_method' => \App\Models\Method::all()
        ]);
    }
    
    
}