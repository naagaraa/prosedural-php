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

 # load controller
controller("welcomeController");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>welcome</title>
    <style>
        body {
            background-color: black;
            color : white;
        }
        .text-small{
            font-size: 15px;
        }

        a {
            display: inline-block;
            color:white !important;
            text-decoration: none;
        }

        a:hover{
            color:red!important;
        }
    </style>
</head>
<body>
    <div class="container">
    <p class="text-end text-small mt-4">Copyright &copy; 2018 - <?= year_now(); ?> Backend By Eka Jaya Nagara as miyuki nagara</p>
        <div class="row d-flex justify-content-center">
            <div class="col-md position-absolute top-50 start-50 translate-middle">
                <h1 class="text-center mb-5">Hello World</h1>
                <p class="text-center">this is welcome,  you can try edit this view at folder apps > view > welcome.php</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul type="none" class="navbar-nav">
                    <li class="nav-item"><a href="<?= url("login") ?>">Login page</a></li>
                    <li class="nav-item"><a href="https://github.com/naagaraa/prosedural-php">Documentation</a></li>
                    <li class="nav-item">PHP version <?= phpversion() ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>