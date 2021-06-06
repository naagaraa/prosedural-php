# Prosedural PHP Project

###### Latar belakang
project ini dibuat untuk alternative dari mini mvc php native project, pada mini mvc itu ditulis dengan konsep object oriented programing dan type connectionnya menggunakan PDO atau PHP data obejct, namun untuk prosedural php project ditulis menggunakan consept prosedural dan type connectionnya menggunakan mysqli dan object. dengan structur foldernya mengadopsi pattern MVC mode view controller yang ditulis secara functional porgraming.
<p>


###### Untuk hatters
<p>
this  repo i am making for my documentation learning. i dont care what u say. if you not like or not agree my consept programing i don't care bro hahaha. if this repo can't solve u problem, it mean u problem not same with me. and put documentation in description, check the readme.md. Is your problem agree ? pliss readme
</p>

## Author dan Contribution

* **Naagaraa Mahasiswa Darma Persada dan Content Creator**  
* [ youtube channel ](https://www.youtube.com/channel/UCYsZhw6Mlk23Q-nUPP9t1YA?view_as=subscriber)

## Documentation
* official documentation on going

## HOW TO USE / INSTALL
##### REQUIRETMENT
* PHP VERSION >= 7.3.2
* Install git-client atau cli
* Install php xdebug  (optional)
* install composer

##### INSTALL
1.  *install phpxdebug* (optional : agar pesan error debug menjadi rapih/ pretty )
2.  *clone myrepository mini dfv php native*

	```
	
	git clone https://github.com/naagaraa/prosedural-php.git

	```

3. *composer install*
    ```
	
	prosedural-php > composer install

	```

## Structur / Arsitekture
<p>
oke berikut ini adalah gaya structur folder yang gue pakai
</p>

* *#apps*
    *  *#config*
    *  *#controller*
    *  *#model*
    *  *#view*
    *  *#htaccess*
    *  *#init.php*
* *#database
    * *#error_vew.php*
    * *#function_error.php*
* *#public*
    * *#css*
    * *#js*
    * *#image*
* *#routes*
    * *#function*
    * *#getonvfile*
    * *#index*
    * *#routing*
* *#storage*
    * *#pdf*
    * *#doc*
    * *#img*
* *#.env*
* *#.env.example*
* *#.htaccess*
* *#index.php*

## Penjelasan Singkat

###### apps
folder apps adalah nanti dimana sebuah project small web dirancang, atau di atur mulai dari dcontroller, model dan view sebagai tampilannya.

<br>

###### config
folder config ini mengatur segala configurasi pada database mysqli, membuat constand dan menjalankan config untuk memanggil function connection database.

<br>

###### database
folder database ini adalah sebuah cheatsheet sintax mysqli

<br>

###### controller
folder controller ini adalah bentuk prosedural functional programing


###### routes
folder routes ini adalah untuk mengatur path atau arah routing pada apps

<br>

###### view
folder view ini adalah dimana hal yang berkaitan dengan html atau template yang akan di tampilkan pada halaman user

<br>

###### .htaccess
htaccess disini di set agar tidak bisa membuka folder corenya yaitu apps

<br>

###### autoload.php
autoload disini adalah untuk memanggil sebuah loading file pada folder config dengan urutan database yang pertama di require

<br>

###### init.php
untuk memanggil file config pada folder apps

<br>

###### public
folder public untuk meletakan asset seperti css, js dan image

<br>

###### storage
folder storage adalah tempat file hasil upload disimpan

<br>

###### .htaccess
default akses remove index.php for first open atau ketika pertama dibuka

<br>

###### index.php
untuk memanggil file autoload.php


## Basic Usage


## connection database
untuk config pada database diletakan pada file .env

```

DB_HOST=localhost
DB_PORT=3306
DB_NAME=namadatabasenya
DB_USER=userdatabasenya
DB_PASS=


```

## mengatur path url dan apps
untuk mengatur config path url dan apps juga terdapat pada file .env

```

# configurasi Path here 
APP_NAME=prosedural-php-native
APP_FOLDER=/prosedural-php-native/
APP_HOST=http://localhost/
APP_URL=http://localhost/prosedural-php-native/

```

### routes
mendefiniskan arah route

```
# example :
# $router->get('pattern', function() {
#    view("nama_view");
# });


$router->get('/', function() {
    view("welcome");
});

$router->get('login', function() {
    view("auth/login");
});


```

## controller
buat nama controllernya di folder apps > controller, lalu buat function function didalamnnya

```
# example 

function title()
{
   $title = 'home page';
   return $title;
}

/**
 * mencetak nilai string deskripsi
 * @return string
 */
function deskripsi()
{
  $deskripsi = "halaman home page";
}


```

## model
buat model untuk berinteraksi dengan query database, 

```
# example model

function get_all_data()
{
    # call connection ke database
    $conn = database();
    
    # query sintax pada database
    $sql = "SELECT * FROM users";
    
    # myqli execute
    $result = $conn->query($sql);

    #return data
    return $result->fetch_all(MYSQLI_ASSOC);
}

/**
 * docuemntations return singe data
 * @return object
 */

function get_single_data_by_condition($id)
{
    # call connection ke database
    $conn = database();

    # query sintax pada database
    $sql = "SELECT * FROM users WHERE id=$id ";

    # myqli execute
    $result = $conn->query($sql);

     #return data
    return $result->fetch_object();
}

```

## memanggil connection database

untuk memanggil connection pada database , cukup panggil function database() dan save ke dalam variabel, memanggil connection akan dibutuhkan ketika berinteraksi query dan model .

```

# call connection ke database
$conn = database();

```

## memanggil model pada controller 
untuk memanggil model pada controller bisa dilakukan dengan melakukan load file model dengan function model("nama_modelnya");

```
# example controller user

function getDataUser()
{
  # load model di pada function
  model("userModel);

  # panggil function yang ada pada model  
  $data = get_all_data();

  # mengembalikan nilai
  return $data;
}

```

## memanggil controller pada view
untuk memanggil pada controller dan menggunakan semua function yang sudah di deklarasi bisa melakukan call controller dengan function controller("namacontrollernya") di paling awal berkas view

```

<?php
# example

#load controller
controller("loginController") 


# next html code

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

some code html here
...

</html>

```

## memanggil view lainnya
untuk memanggil view lainnya bisa gunakan function view("nama_viewnya), 

```
# example

<?php view("header") ?>

    <p>some html code</p>
    ...
 
<?php view("footer")?>

```

## memanggil asset
untuk memanggil asset pada folder public gunakan function asset("namaassetnya"), asset bisa berupa berkas css, js, dan gambar biasanya di panggil pada berkas view.

```
# example 

<link rel="stylesheet" type="text/css" href="<?= asset("vendor/bootstrap/css/bootstrap.min.css") ?>">

```

## memanggil arah url
untuk memanggil arah url bisa dilakukan dengan function url("nama-urlnya"), biasanya digunakan untuk navigasi antar halaman, example http://domain/home, atau http://domain/about dan lain lain. yang dimana arah urlnya didaftarkan pada routes terlebih dahulu.

```
# example

<ul type="none" class="navbar-nav">
    <li class="nav-item"><a href="<?= url("login") ?>">Login page</a></li>
    <li class="nav-item"><a href="<?= url("register") ?>">Login page</a></li>
    <li class="nav-item"><a href="<?= url("about") ?>">Login page</a></li>
    <li class="nav-item"><a href="<?= url("home") ?>">Login page</a></li>
</ul>

```

## memanggil function timezone
untuk memanggil function timezone buka folder apps > config > timezone.php disana tersedia beberapa function yang sudah saya buat untuk waktu

mengatur zona waktu :

```
date_default_timezone_set('Asia/Jakarta');
```

memanggil tahun :

```

year_now() // return tahun 2021

```


