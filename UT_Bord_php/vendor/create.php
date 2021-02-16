<?php
require_once '../config/conection.php';

print_r($_POST);

$Pickup = $_POST['Pickup'];
$Pickup_date = $_POST['Pickup_date'];
$Pickup_time = $_POST['Pickup_time'];
$Delivery = $_POST['Delivery'];
$Delivery_date = $_POST['Delivery_date'];
$Delivery_time = $_POST['Delivery_time'];
$Loaded_Miles = $_POST['Loaded_Miles'];
$Weight = $_POST['Weight'];
$rate = $_POST['rate'];
$type = $_POST['type'];
$Comodity = $_POST['Comodity'];
$Warning = $_POST['Warning'];

// визначаю останній номер id бази даних та додаю одиницю
// $sqlId = "SELECT LAST_INSERTED_ID FROM members";
// while ($row = mysql_fetch_assoc($sql)) {
//   echo "<span class='num'>" + $row['id'] + "<span>";
// }
// $sqlId+=1;
// echo "$sqlId";

// upload
if ($_SERVER['REQUEST_METHOD'] == 'POST'){


  // Upload function -----------------------------------------
  $filename = $_FILES['path']['name'];
    //  Задаю змінній $ext визначення розширення для перевірки на можливість використання файлу. Захист системи від введення шкідливих файлів.
    $ext = substr($filename, strrpos($filename, '.') + 1);

    switch ($ext) {
        case "pdf":
            $file = "../RC/".$_FILES['path']['name'] . uniqid('_UT_').'.pdf';
              if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 4000000) {
                $sql_rc = mysqli_query($connect, "INSERT INTO `load_bord`(`id`, `Pickup`, `Pickup-date`, `Pickup-time`, `Delivery`, `Delivery-date`, `Delivery-time`, `Loaded_Miles`, `Weight`, `rate`, `Van_type`, `Comodity`, `Warning`, `RateConfirmation`) VALUES (NULL, '$Pickup', '$Pickup_date', '$Pickup_time', '$Delivery', '$Delivery_date', '$Delivery_time', '$Loaded_Miles', '$Weight', '$rate', '$type', '$Comodity', '$Warning', '$file')");

                // echo "<br> file name is:   $filename ";
                // echo "<br> file type is:   $ext ";
                // echo "<br> UPLOADED";
            }
            break;
        case "jpg":
            $file = "../RC/".$_FILES['path']['name'] . uniqid('_UT_').'.jpg';
            if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 900000) {
              $sql_rc = mysqli_query($connect, "INSERT INTO `load_bord`(`id`, `Pickup`, `Pickup-date`, `Pickup-time`, `Delivery`, `Delivery-date`, `Delivery-time`, `Loaded_Miles`, `Weight`, `rate`, `Van_type`, `Comodity`, `Warning`, `RateConfirmation`) VALUES (NULL, '$Pickup', '$Pickup_date', '$Pickup_time', '$Delivery', '$Delivery_date', '$Delivery_time', '$Loaded_Miles', '$Weight', '$rate', '$type', '$Comodity', '$Warning', '$file')");

                // echo "<br> file name is:   $filename ";
                // echo "<br> file type is:   $ext ";
                // echo "<br> UPLOADED";
            }
            break;
        case "png":
            $file = "../RC/".$_FILES['path']['name'] . uniqid('_UT_').'.png';
            if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 512000) {
              $sql_rc = mysqli_query($connect, "INSERT INTO `load_bord`(`id`, `Pickup`, `Pickup-date`, `Pickup-time`, `Delivery`, `Delivery-date`, `Delivery-time`, `Loaded_Miles`, `Weight`, `rate`, `Van_type`, `Comodity`, `Warning`, `RateConfirmation`) VALUES (NULL, '$Pickup', '$Pickup_date', '$Pickup_time', '$Delivery', '$Delivery_date', '$Delivery_time', '$Loaded_Miles', '$Weight', '$rate', '$type', '$Comodity', '$Warning', '$file')");

                // echo "<br> file name is:   $filename ";
                // echo "<br> file type is:   $ext ";
                // echo "<br> UPLOADED";
            }
            break;
        default:
                echo "Warning!!! This file is not in the appropriate format or too big";
        break;
    }


}
?>

<!-- скріпт перенаправлення на головну сторінку! -->
<script>
  window.location.href = '../main.php';
</script>