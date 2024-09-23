<?php

session_start();

require_once 'libs/core.php';


/** 
 * Throw all errors to a central error handler function
 * This function is in core/core.php file
 */
set_exception_handler('exception_handler');

require_once 'config.php';
require_once 'libs/routing.php';
require_once 'libs/mysql.php';

?>

<!doctype html>
<html lang="<?= $_ENV['LANG'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beep</title>

    <link rel="stylesheet" href="public/css/app.css">

    <script src="public/js/app.js" defer></script>
</head>

<body>
    <?php $page = page(); ?>

    <?php if ($page !== false) : ?>
        <?php require_once 'resources/views/components/header.view.php' ?>
        <?php require_once $page; ?>
        <?php require_once 'resources/views/components/footer.view.php' ?>
    <?php endif ?>
</body>

</html>