<?php

/**
 * Get the folder and view from url
 */
function page()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    if (file_exists('resources/views/' . $page . '.view.php')) {
        return 'resources/views/' . $page . '.view.php';
    }

    throw new Exception($page . ' does not exist', 404);
}