<?php

require_once 'config.php';
require_once 'libs/core.php';
require_once 'libs/mysql.php';

$directory = new DirectoryIterator('migrations');

/**
 * Get all .sql files from migrations folder and execute queries
 */
foreach ($directory as $key => $fileinfo) {
    if ($fileinfo->isFile()) {
        if (stristr($fileinfo->getExtension(), 'sql')) {
            $contents = file_get_contents('migrations/' . $fileinfo->getFilename());
            
            dBquery($contents);
        }
    }
}
