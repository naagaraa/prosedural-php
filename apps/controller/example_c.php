<?php
/**
 * Documentention 
 * @author nagara
 * if u have have function prosedural write this
 * 
 * in give u example two example :
 * 1. working with function
 * 2. working with datadatabase resul but i give example in array
 *    all result it same
 * 
 * write one function and call at view;
 */

/**
 * @return string
 */
function title()
{
   $title = 'home';
   echo $title;
}

 function message()
 {
    echo 'hi, this name nagara i am from indonesia';
 }


 function bookdata()
 {
     $data = [
         'id' => 1,
         'title' => 'komik',
         'price' => '10k',
     ];

    return $data;

 }