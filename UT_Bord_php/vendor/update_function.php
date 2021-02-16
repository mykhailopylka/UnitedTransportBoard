<?php
require_once '../config/conection.php';

print_r($_POST);
$id = $_POST['id_kay'];
$name = $_POST['name_kay'];
$description = $_POST['description_kay'];
$phone = $_POST['phone_kay'];

mysqli_query($connect, "UPDATE `united` SET `name`= '$name', `phone`= '$phone',
 `description`= '$description' WHERE `united`.`id` = '$id' ");

?>
<script>
    window.location.replace("/");
</script>
