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
   $title = 'home page';
   echo $title;
}

 function message()
 {
   //  call model
   model("userModel");

   // call function model
   return get_all_data();

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