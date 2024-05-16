<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiCheckController extends Controller
{
    public function check($user_id = null, $zone_id = null, $game = null)
    {
        $params = [
            'key' => ENV("MYS_KEY"),
            'sign' => md5(ENV("MYS_ID") . ENV("MYS_KEY")),
            'type' => 'game',
            'code'    => $game,
            'user_id' => $user_id,
            'zone_id' => $zone_id
        ];
        
        $result = $this->connect('/check-game',$params);
        if($result['status'] == true){
            return array(
                'status' => array('code' => 200),
                'data' => array('userNameGame' => $result['data']['username']),
            );
        }else{
            return array(
                'status'     => array('code' => 1, 'message' => $result['message'])
            );
        }
    }
    
    public function check_bank($number = null, $bank_code = null)
    {
        $params = [
            'key' => ENV("MYS_KEY"),
            'sign' => md5(ENV("MYS_ID") . ENV("MYS_KEY")),
            'type' => 'validation',
            'bank_code'    => $bank_code,
            'number' => $number
        ];
        
        $result = $this->connect('/bank',$params);
        if($result['status'] == true){
            return array(
                'status' => array('code' => 200),
                'data' => array('userNameGame' => $result['data']['Name']),
            );
        }else{
            return array(
                'status'     => array('code' => 1, 'message' => $result['message'])
            );
        }
    }

    public function connect($url, $data = null)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, 'https://api.mystic-pedia.com/v1'.$url);
        // curl_setopt($ch,CURLOPT_HTTPHEADER,['Content-Type: application/x-www-form-urlencoded']);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        
        $chresult = curl_exec($ch);
        curl_close($ch);
        $json_result = json_decode($chresult, true);
        return $json_result;
    }
}