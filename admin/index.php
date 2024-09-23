<?php

session_start();

require_once 'config.php';
require_once '../libs/core.php';
require_once '../libs/routing.php';

?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="../css/app.css">

    <script src="../js/app.js" defer></script>
</head>
<body>
    
<?php require page(); ?>

</body>
</html>