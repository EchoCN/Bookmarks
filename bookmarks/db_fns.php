<?php

function db_connect() {
   $result = mysqli_connect('localhost','root','123456','bookmarks');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
