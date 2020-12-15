<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>

<body>
    <?php
    // Import menu.php


    // Pindahkan deklarasi variable kesini 
    require_once('menu.php');

    $juice = new Menu('JUS');
    $coffee = new Menu('KOPI');
    $curry = new Menu('GULAI');
    $pasta = new Menu('PASTA');

    $menus = array($juice, $coffee, $curry, $pasta);

    ?>
</body>

</html>