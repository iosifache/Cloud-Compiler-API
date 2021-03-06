<?php
    /*
     * Including global variables
     */
    $config = include(__DIR__ . '/config.inc');
    $scrapeInfo = include(__DIR__ . '/scrapeInfo.inc');
    $langExtData = include(__DIR__ . '/langExtData.inc');

    spl_autoload_register(function($className) {
        if(strpos($className, 'Klein\\') === 0) {
            $dir = '/' . str_replace('\\', '/', $className);
            require_once __DIR__ . $dir . '.php';
        } else if(strpos($className, 'Ideone') === 0) {
            $dir = '/' . $className . '.class';
            require_once __DIR__ . $dir . '.inc';
        }
    });