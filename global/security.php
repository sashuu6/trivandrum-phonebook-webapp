<?php

function decrypt($passphrase, $jsonString){
    if($jsonString == '')
        return '';
    $jsondata = json_decode($jsonString, true);
    $salt = hex2bin($jsondata["s"]);
    $ct = base64_decode($jsondata["ct"]);
    $iv  = hex2bin($jsondata["iv"]);
    $concatedPassphrase = $passphrase.$salt;
    $md5 = array();
    $md5[0] = md5($concatedPassphrase, true);
    $result = $md5[0];
    for ($i = 1; $i < 3; $i++) {
        $md5[$i] = md5($md5[$i - 1].$concatedPassphrase, true);
        $result .= $md5[$i];
    }
    $key = substr($result, 0, 32);
    $data = openssl_decrypt($ct, 'aes-256-cbc', $key, true, $iv);
    return json_decode($data, true);
}

function encrypt($passphrase, $value){
    if($value == '')
        return '';
    $salt = openssl_random_pseudo_bytes(8);
    $salted = '';
    $dx = '';
    while (strlen($salted) < 48) {
        $dx = md5($dx.$passphrase.$salt, true);
        $salted .= $dx;
    }
    $key = substr($salted, 0, 32);
    $iv  = substr($salted, 32,16);
    $encrypted_data = openssl_encrypt(json_encode($value), 'aes-256-cbc', $key, true, $iv);
    $data = array("ct" => base64_encode($encrypted_data), "iv" => bin2hex($iv), "s" => bin2hex($salt));
    return json_encode($data);
}

function encrypt_public($data, $method = "POST", $passphrase = WEB_KEY) {
    if(!is_array($data))
        return base64_encode(encrypt($passphrase, $data));
    if($method == "POST") {
        foreach($data as $key => $value) {
            if(!empty($value))
                $data[$key] =  base64_encode(encrypt($passphrase, $value));
        }
        return $data;
    }
    return array();
}

function decrypt_public($passphrase, $data, $method = "POST") {
    if($method == "POST") {
        foreach($data as $key => $value) {
            if(!empty($value))
                $data[(decrypt($passphrase, $key))] = decrypt($passphrase, $value);
            else
                $data[(decrypt($passphrase, $key))] = '';
            unset($data[$key]);
        }
        return $data;
    }
    return array();
}

function random_key() {
    return md5(microtime().rand());
}