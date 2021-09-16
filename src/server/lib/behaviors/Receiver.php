<?php
class Receiver implements BehaviorInterface
{

    static function install()
    {
        self::validate();
        self::store(config('fullPathZipFile'));
    }

    static private function validate(){
        if (!isset($_FILES['file_contents']))
            die('file notfound');
    }

    static private function store($fullPathFile){
        move_uploaded_file($_FILES['file_contents']['tmp_name'], $fullPathFile);
    }

    static function terminalStartText(): string
    {
        return 'receiver get...';
    }

    static function terminalEndText($resultInstall): string
    {
        return 'received zip file';
    }
}
