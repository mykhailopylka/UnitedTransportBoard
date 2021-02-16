<?php

header("content-type:image/jpeg");

//вставляємо файл для підєднання до бази данних
require 'config/conection.php';

$name=$_GET['name'];

$select_image="select * fromimage_tablewhereimagename='$name'";

$var=mysqli_query($select_image);

if($row=mysqli_fetch_array($var))
{
    $image_name=$row["imagename"];
    $image_content=$row["imagecontent"];
}
echo $image;

?>