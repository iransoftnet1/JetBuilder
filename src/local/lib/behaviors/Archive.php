<?php

class Archive implements BehaviorInterface
{
    public static function install()
    {
        return self::zipCompress(config('fullDirProductionPath'),config('fullProductionZipFile'));
    }

    private static function zipCompress($path,$zipFileName)
    {
        // Get real path for our folder
        $rootPath = realpath($path);

        // Initialize archive object
        $zip = new ZipArchive();
        $zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Create recursive directory iterator
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($rootPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file) {
            // Skip directories (they would be added automatically)
            if (!$file->isDir()) {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($rootPath) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }

        // Zip archive will be created only after closing object
       return $zip->close();
    }


    static function terminalStartText(): string
    {
        return 'compress zip...';
    }

    static function terminalEndText($resultInstall): string
    {
        return 'zip file created';
    }
}
