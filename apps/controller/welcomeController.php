<?php
/**
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * Documentation Controller
 * @author nagara
 * @return function
 * ----------------------------------------------------------------------------------------------------------------------------------------
 * 
 * pada controller setiap hal di tulis ke dalam sebuat function function yang di dalam functionnya dapat berinteraksi dengan database
 * untuk lebih lengkapnya bisa check documentasi nya di github atau gitbook . functional programing pada umumnnya
 * sama dengan penulisan function biasa yang dapat menerima parameter.
 * 
 */

/**
 * mencetak string title
 * @return string
 */
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
