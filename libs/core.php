<?php

/**
 * (var_)dump variable(s) and exit
 * No params, just get vars from func_get_args function
 */
function dd(): void
{
    $args = func_get_args();

    if (count($args)) {
        echo "<pre>";

        foreach ($args as $arg) {
            var_dump($arg);
        }

        echo "</pre>";

        die();
    }
}

/**
 * Request error (4xx, 5xx etc) and redirect
 * @param $error http error request code
 * @param $message to show extra info about the error
 */
function abort($error, $message = null): void
{
    $error = is_numeric($error) ? $error : 500;

    http_response_code($error);

    require_once 'resources/views/errors/error.view.php';
    
    exit();
}

/**
 * All Exceptions go to this function as this has been set in index.php
 * @param $exception Error message
 */
function exception_handler($exception): void
{
    abort($exception->getCode(), $exception->getMessage());
}
