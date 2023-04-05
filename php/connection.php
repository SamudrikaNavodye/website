<?php 
$link= mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
mysqli_select_db($link, "elegant_flora") or die(mysqli_error($link));

 ?>