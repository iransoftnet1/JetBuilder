<?php

class Upload implements BehaviorInterface
{
    public static function install()
    {

        return self::send(config('fullProductionZipFile')
            , config('urlServer')
            , config('tokenKey')
            , config('token'));
    }

    private function send($pathFile, $url, $tokenKey, $token)
    {
        $curlFile = curl_file_create($pathFile);
        $post = array("$tokenKey" => $token, 'file_contents' => $curlFile);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    static function terminalStartText(): string
    {
        return 'upload host...';
    }

    static function terminalEndText($resultInstall): string
    {
        return 'success upload host' . "\n" . $resultInstall;
    }
}
