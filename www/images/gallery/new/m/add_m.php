<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Конвертер</title>
</head>

<body>

<?php
$site_dir=$_SERVER['DOCUMENT_ROOT'];
$drct="$site_dir/images/gallery/new/m/";
$hndl=opendir($drct);
while($file=readdir($hndl)){
  if(($file!=".")&&($file!="..")&&($file!="add_m.php")){
    rename($file,substr($file,0,-4)."-m.jpg");
    echo("$file <br>");
  }
}
?>

</body>

</html>
