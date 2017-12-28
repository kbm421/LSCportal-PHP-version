<?php
  if(!empty($_GET['a'])){
    $softname = $_GET['a'];
    if(strcmp($softname, "audacity")){
      exec("C:\Program Files (x86)\Audacity\audacity.exe");
    }
  }
 ?>
