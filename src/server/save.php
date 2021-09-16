<?php

class save
{
    static function saveFile()
    {
        if (!self::validate()) {
            die('token not valid');
            return;
        }
        /*var_dump($_FILES['file_contents']);
        die('--------------');*/
        $info = pathinfo($_FILES['file_contents']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newname = "file." . $ext;

        $target =  $newname;
        move_uploaded_file($_FILES['file_contents']['tmp_name'], $target);
    }

    static function validate()
    {
        if (isset($_POST['token']))
            return $_POST['token'] == 'test123';
        return false;
    }
}