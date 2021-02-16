<?php
require_once '../config/conection.php';

$value_id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `united` WHERE `united`.`id` = '$value_id'");
print_r($_GET);



?>
<script>
    window.location.replace("/");
</script>
