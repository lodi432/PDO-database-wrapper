<?php

 require_once 'DB.php';

 $db = DB::get_instance();

function dnd($dump) {
  echo '<pre>';
  var_dump($dump);
  echo '</pre>';
  die() ;
}

$db->delete('contacts',4);
