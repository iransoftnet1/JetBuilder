<?php

class zip
{
    private static $extractPath = __DIR__ . '/hostFolder';

    public static function extract($filePath)
    {
        $zip = new ZipArchive;
        $res = $zip->open($filePath);
        if ($res === TRUE) {
            $zip->extractTo(self::$extractPath);
            $zip->close();
        } else {
            echo 'error in extract';
        }
    }
}