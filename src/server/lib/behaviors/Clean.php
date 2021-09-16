<?php
class Clean implements BehaviorInterface
{

    static function install()
    {
        self::remove(config('projectPath'),config('folderPreventRemove'),config('filesPreventRemove'));
    }

    private static function remove($projectDire,$folderPreventRemove,$filesPreventRemove){
        $di = new RecursiveDirectoryIterator($projectDire, FilesystemIterator::SKIP_DOTS);
        $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($ri as $file) {
            if ($file->isDir()) {
                if (in_array($file->getFilename(), $folderPreventRemove))
                    continue;
                rmdir($file);
            } else {
                if (in_array($file->getFilename(), $filesPreventRemove))
                    continue;
                unlink($file);
            }

        }
    }

    static function terminalStartText(): string
    {
        return 'clean folder and file ...';
    }

    static function terminalEndText($resultInstall): string
    {
        return 'clean success';
    }
}
