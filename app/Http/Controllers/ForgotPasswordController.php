<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Http;
use Auth;

class ForgotPasswordController extends Controller
{
    
    public function forgotPassword()
    {
        return view('template.forgotpassword', [
        'pay_method' => \App\Models\Method::all()
        ]);
    }
    
    
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric'
        ],
        [
            'phone.required' => 'Harap isi no',
            'phone.numeric' => 'No tidak valid!'
        ]);
        
        $no = $request->phone;
        
    
        
        $cek = \App\Models\User::where('no_wa',$no)->first();
        
        if(!$cek){
            
            return back()->with('error','No tidak ditemukan!');
            
        }
        
        $api = \DB::table('setting_webs')->where('id',1)->first();
        
        
        $otp = rand(100000,999999);
        
        $cek->update(['otp' => $otp]);
        
        Session::put('no',$no);
        
        Http::post('https://wa2.wisender.link/send-message', [
            'api_key' => $api->wa_key,
            'sender'  => $api->nomor_admin,
            'number'  => $no,
            'message' => 'Silahkan masukkan *'.$otp.'* untuk KODE OTP anda.'
        ]);
       
        
    
        
        
        return view('template.verifyotp', [
        'pay_method' => \App\Models\Method::all()
        ]);
        
        
    }
    
    
    public function verifyOtp(Request $request)
    {
        
        $no = Session::get('no');
        
        if(!$no){
            
            return redirect('/forgot-password');
            
        }
        
        $otp = '';
        
        foreach($request->otp as $kode){
            
            $otp .= $kode;
            
        }
        
        
        $cek = \App\Models\User::where('no_wa',$no)->where('otp',$otp)->first();
        
        if(!$cek){
            
            return back()->with('error','Kode OTP tidak valid!');
            
        }
        
        $cek->update(['otp' => NULL]);
        
        
        Auth::login($cek);
        
        
        return redirect('/user/edit/profile');
        
        
        
        
        
    }
    
}