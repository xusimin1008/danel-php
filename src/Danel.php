<?php

/*
 * Danel PHP Library
 *
 */

namespace Datartisan;

class Danel {
    
    public $token;

    public $API_URL_EVENT = 'http://danel.com/api/event';
    public $API_URL_USER = 'http://danel.com/api/user';
    
    public function __construct($token)
    {
        $this->token = $token;
    }
    
    public function event($name, $uid=NULL, $time=NULL, $properties=[])
    {

        $dArray = [
            'token' => $this->token,
            'event' => [
                'name' => $name,
                'uid' => $uid,
                'time' => $time,
                'properties' => $properties,
            ],
        ];

        $dBase64 = $this->packData($dArray);

        $this->request($this->API_URL_EVENT, $dBase64);

        return;
    }
    
    public function user($uid, $properties)
    {
        $dArray = [
            'token' => $this->token,
            'user' => [
                'uid' => $uid,
                'properties' => $properties,
            ],
        ];

        $dBase64 = $this->packData($dArray);

        $this->request($this->API_URL_EVENT, $dBase64);

        return ;
    }
    
    public function request($apiUrl, $data)
    {
        // url?d=querydata&ts
        $url = $apiUrl.'?d='.$data.'&'.time();
        $result = file_get_contents($url);

        print_r($result);

        return;
    }

    private function packData($dArray)
    {
        $dJson = json_encode($dArray);
        $dBase64 = base64_encode($dJson);
        return $dBase64;
    }
    
}