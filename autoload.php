<?php

define('AUTOLOAD', true);

spl_autoload_register(function ($class) {
    $file = __DIR__ . '/classes/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        error_log("Autoload error: Class file not found $class");
        throw new \Exception("Autoloader could not find class : $class");
    }
});