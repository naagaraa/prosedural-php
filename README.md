# Prosedural PHP

<!-- latar belakang -->
Hi, my name is miyuki nagara, you can call me gara, that's as my name in internet. sorry i can't tell you about my real name.

<p>Latar belakang</p>
<p>
semua ini bermula karena seorang gue, setelah melihat repo gue di github dan tau soal project mini mvc php native, dia mengatakan itu adalah framework bukan native , yah dia gak salah bahwa itu adalah framework. namun yang gue tekankan bahwa itu framework yang gue kembangkan dari hasil belajar programing gue selama 2 tahun sejak repo ini dibuat, project tersebut adalah framework atau kerangka kerja yang dibangun from 0 dari php native, untuk membangun sebuah sederhana kerangka kerja, itu diperlukan pengetahuan tentang fundamental programming, konsep programing dan presentation pattern. konsep programing adalah gaya penulisan pada program, misalnya saja seperti OOP (OBJECT ORIENTED PROGRAMING) or FUNCTION (PROSEDURAL PROGRAMING), fundamental programming itu seperti pengetahuan tentang variabel, function, looping dan lain lain, dan yang terakhir adalah presentation pattern, simplenya presentation pattern adalah gaya structrur directory pada program yang akan di tampilkan atau ditunjukan , seperti MVC, MVM, HYMVC dan lain lainnya. umumnya big framework mengadopsi Presentation pattern dan Object Oriented.

oleh karena itu, gue kali ini mencoba membuat gaya programing php dengan style prosedural consept, dimana hal ini akan membentuk sebuah framework namun dengan hal berbeda dengan fungsi yang sama. maka lahirnya DVF (database -  view - function). dimana database akan mewakili models, namun dalam bentuk prosedural, function akan mewakili controller dalam bentuk prosedural, dan view tetap sama dia akan mewakili data yang di tampil kan.
</p>

<p>Untuk hatters</p>
<p>
this  repo i am making for my documentation learning. i dont care what u say. if you not like or not agree my consept programing i don't care bro hahaha. if this repo can't solve u problem, it mean u problem not same with me. and put documentation in description, check the readme.md. Is your problem agree ? pliss readme
</p>

## Author dan Contribution

* **Naagaraa Mahasiswa Darma Persada dan Content Creator**  
* [ instagram ](https://www.instagram.com/naagaraa/)
* [ youtube channel ](https://www.youtube.com/channel/UCYsZhw6Mlk23Q-nUPP9t1YA?view_as=subscriber)




## HOW TO USE / INSTALL
##### REQUIRETMENT
* PHP VERSION >= 7.3.2
* Install git-client 
* Install php xdebug  (optional)

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
    *  *#database*
    *  *#function*
    *  *#routes*
    *  *#view*
    *  *#htaccess*
    *  *#autoload.php*
    *  *#init.php*

* *#error*
    * *#error_vew.php*
    * *#function_error.php*
* *#public*
    * *#css*
    * *#js*
    * *#image*
* *#system*
    * *#function*
    * *#getonvfile*
    * *#index*
    * *#routing*
* *#.env*
* *#.htaccess*
* *#autoload.php*
* *#index.php*

## Penjelasan Singkat

### apps
<p>
folder apps adalah nanti dimana sebuah project small web dirancang, atau di atur mulai dari database, function dan viw sebagai tampilannya.
</p>

### config
<p>
folder config ini mengatur segala configurasi pada database mysqli, membuat constand dan menjalankan config untuk memanggil function connection database.
</p>

### database
<p>
folder database ini adalah bentuk prosedural, atau penulisan lain yang saya buat untuk mendeskripsikan models
</p>

### function
<p>
folder functiono ini adalah bentuk prosedural, atau penulisan lain yang saya buat untuk mendeskripsikan controller
</p>

### routes
<p>
folder routes ini adalah bentuk prosedural, atau penulisan lain yang saya buat untuk mendeskripsikan sebuah routing pada web.
</p>

### view
<p>
folder view ini adalah bentuk prosedural, atau penulisan lain yang saya buat untuk mendeskripsikan sebuah view atau bentuk bagaimana data itu ditampilkan dalam format html
</p>

### .htaccess
<p>
htaccess disini di set agar tidak bisa membuka folder corenya yaitu apps
</p>

### autoload.php
<p>
autoload disini adalah untuk memanggil sebuah loading file pada folder config dengan urutan database yang pertama di require
</p>

### init.php
<p>
untuk memanggil file autoload dan route.php
</p>

### error
<p>
untuk memanggil file autoload dan route.php
</p>

### public
<p>
folder public untuk meletakan asset seperti css, js dan image
</p>

### system
<p>
folder system ini dimana gue menbuat core proseduralnya untuk menghandle beberapa perintah seperti routing, envirotment variabe, dan built-in-function
</p>

### htaccess
<p>
default akses remove index.php for first open
</p>

### autoload.php
<p>
dibuat untuk membuat autoloading file di dalam folder system
</p>

### index.php
<p>
untuk memanggil file autoload.php
</p>
