<html>
<head>
    <title>file manager</title>
</head>

<body>
<form action="main.php" enctype="multipart/form-data" method="post">
    <input type="file" name="path" title="Выберите первый файл"/></br>
    </br>
<!--    <input type="file" name="path1" title="Выберите второй файл"/> </br>-->
<!--    </br>-->
    <input type="submit" name="button" /> </br>
</form>
</body>

</html>

<?

require 'config/conection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file = "rc/".$_FILES['path']['name'];
    $filename = $_FILES['path']['name'];

//  Задаю змінній $ext визначення розширення для перевірки на можливість використання файлу. Захист системи від введення шкідливих файлів.
    $ext = substr($filename, strrpos($filename, '.') + 1);

    if (move_uploaded_file($_FILES['path']['tmp_name'], $file)) {
        if (($ext == "pdf") ||($ext == "jpg") || ($ext == "png") || ($ext == "gif") && ($_FILES["path"]["size"] < 55000)) {
            $sql_rc = mysqli_query($connect, "UPDATE `load_bord` SET `RateConfirmation` = '$file' WHERE `id` = 1 ");

            echo "<br> file name is:   $filename ";
            echo "<br> file type is:   $ext ";
            echo "<br> UPLOADED";
        }
        else {
            echo "Warning!!! This file is not in the appropriate format or his size too big";
        }
    }
} else {
    echo  "BIG FILE.";
}

?>