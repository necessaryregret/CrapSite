<?php
if (isset($_GET["f"])){
  if (file_exists($_GET["f"])){
$file = readfile($_GET["f"]);}
}
 ?>
