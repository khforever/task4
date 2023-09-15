<?php
  echo time();


  echo "<br>";
 echo date('l', time());
 echo "<br>";

//cookie



 setcookie("name", "kholoud", time() + 86430, '/'); //1 day
var_dump($_COOKIE['name']);


?>