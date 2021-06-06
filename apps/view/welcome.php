<?php 
/**
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * Documentation view
 * @author nagara
 * @return function
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * 
 * pada view tidak perlu melakukan memanggil connection lagi cukup paggil controller saja, karena semua aktifitas
 * yang berkaitan dengan logic di definisikan ke dalam function yang di tulis pada controller pada view
 * cukup paggil function yang terdapat pada berkas controllernya
 */
controller("welcomeController");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title(); ?></title>
</head>
<body>
    <h1><?= title(); ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quibusdam quia voluptate iste voluptates soluta consequatur quae ducimus perferendis blanditiis amet, aliquam alias nam doloribus! Tempora quidem deserunt animi excepturi.</p>

    <ul>
        <li><a href="<?= url() ?>">Home</a></li>
        <li><a href="<?= url("dashboard") ?>">Dashboard</a></li>
        <li><a href="<?= url("info") ?>">Info php</a></li>
        <li><a href="https://github.com/naagaraa/prosedural-php">Documentations</a></li>
    </ul>
</body>
</html>