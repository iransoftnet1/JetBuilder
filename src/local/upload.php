<?php

class upload
{
    private $token;
    private $url;

    public function __construct($token, $url)
    {
        $this->token = $token;
        $this->url = $url;
    }

    public function send($pathFile)
    {
        $curlFile = curl_file_create($pathFile);
        $post = array('token' => $this->token, 'file_contents' => $curlFile);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        curl_close($ch);
        var_dump($result);
    }
}