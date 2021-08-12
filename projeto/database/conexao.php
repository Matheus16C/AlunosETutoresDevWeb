<?php 

  $host = "ec2-3-226-134-153.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "d5ol6e2dnva67i";
  $user = "tzxplhjaunfrsc";
  $pass = "5eba1c96de997c5cc3cdc2205d38eaf7bbf2f3183715c56ed9c4f5d4a02e35d6";
  
  $conexao = pg_connect("host=" . $host . " port=" . $port . " dbname=" . $dbname . " user=" . $user . " password=" .$pass);

  
  
?>