<?php

class remove
{
    private static $foldersPreventDelete = [
        'robot'
    ];
    private static $filePreventDelete = [
        'protected.txt'
    ];

    private static $projectDir = __DIR__ . '/hostFolder';

    static function start()
    {
        $di = new RecursiveDirectoryIterator(self::$projectDir, FilesystemIterator::SKIP_DOTS);
        $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($ri as $file) {
            if ($file->isDir()) {
                if (in_array($file->getFilename(), self::$foldersPreventDelete))
                    continue;
                rmdir($file);
            } else {
                if (in_array($file->getFilename(), self::$filePreventDelete))
                    continue;
                unlink($file);
            }

        }
        return true;
    }


}