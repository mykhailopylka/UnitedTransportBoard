<?php
require_once 'config/conection.php';

print_r($_GET);
$value_id = $_GET['id'];
$value = mysqli_query($connect, "SELECT * FROM `load_bord` WHERE `id` = '$value_id'");
// створюєм масив значень з вибраних елементів бази даних ( це працює саме для одного елемента виводу, інакше потрібний цикл!)
$value = mysqli_fetch_assoc($value);
//print_r($value);
?>

<!doctype html>
<html lang="en">
<head>
    <title>update</title>
</head>
<body>
<!--  створюєм форму для занесення даних в базу  -->
<h3>Update the date</h3>
<form action="../vendor/update_function.php" method="post">

    <input type="hidden" name="id_kay" value="<?= $value['id']  ?>">
    
    <span>Title</span><br>
    <input type="text" name="name_kay" value="<?= $value['name'] ?>" placeholder="input name"><br>
    <span>Description</span><br>
    <textarea name="description_kay"><?= $value['description'] ?></textarea><br>
    <span>Phone</span><br>
    <input type="number" name="phone_kay" value="<?= $value['phone'] ?>" placeholder="phone"><br><br>
    <button type="submit ">Update</button>
</form>

</body>
</html>
