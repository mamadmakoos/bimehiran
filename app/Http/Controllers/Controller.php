<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public static function sendSms($mobile,$body){
        $username = 'kojabime';
        $password = 'mamadmakoos8585';
        $source = '982135868';
        $destination = $mobile;
        //$token = "e8a5e8e86e210cc3614b778c492fe3cb92a8c690e9e5f05414d8e4d945b704d3";
        $url="https://panel.asanak.com/webservice/v1rest/sendsms";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://panel.asanak.com/webservice/v1rest/sendsms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'username' => $username,
                'password' => $password,
                'Source' => $source,
                'Message' => $body,
                'destination' => $destination
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

    }
}
