<?php 
    // call controller 
    controller("example_c");


    // call function
    title();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quibusdam quia voluptate iste voluptates soluta consequatur quae ducimus perferendis blanditiis amet, aliquam alias nam doloribus! Tempora quidem deserunt animi excepturi.</p>

    <ul>
        <li><a href="<?= url() ?>">Home</a></li>
        <li><a href="<?= url("info") ?>">Info php</a></li>
        <li><a href="https://github.com/naagaraa/prosedural-php">Documentations</a></li>
    </ul>
</body>
</html>