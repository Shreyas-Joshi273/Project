<?php

class ClearCache
{
    public $cached_file;
    function __construct () {

    }

    function __destruct ()
    {
        $file = "/var/www/html/cache/ {$this->cached_file}";
        if(file_exists($file)) {
            @unlink($file);
        }
    }
}

?>