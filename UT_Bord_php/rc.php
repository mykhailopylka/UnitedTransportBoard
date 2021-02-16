<?
require 'config/conection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $filename = $_FILES['path']['name'];
    //  Задаю змінній $ext визначення розширення для перевірки на можливість використання файлу. Захист системи від введення шкідливих файлів.
    $ext = substr($filename, strrpos($filename, '.') + 1);

    switch ($ext) {
        case "pdf":
            $file = "RC/".$_FILES['path']['name'] . uniqid('_UT_').'.pdf';
            // if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 1000) {
                if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 512000) {
                $sql_rc = mysqli_query($connect, "INSERT INTO `load_bord`(`id`, `Pickup`, `Pickup-date`, `Pickup-time`, `Delivery`, `Delivery-date`, `Delivery-time`, `Loaded_Miles`, `Weight`, `rate`, `Van_type`, `Comodity`, `Warning`, `RateConfirmation`) VALUES (NULL, 'Pickup', '213', '23', 'Delivery', '23', '23', '45654', '54654', '456', 'van', 'Comodity', 'Warning', '$file')");

                echo "<br> file name is:   $filename ";
                echo "<br> file type is:   $ext ";
                echo "<br> UPLOADED";
            }
            break;
        case "jpg":
            $file = "RC/".$_FILES['path']['name'] . uniqid('_UT_').'.jpg';
            if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 900000) {
                $sql_rc = mysqli_query($connect, "INSERT INTO `load_bord`(`id`, `Pickup`, `Pickup-date`, `Pickup-time`, `Delivery`, `Delivery-date`, `Delivery-time`, `Loaded_Miles`, `Weight`, `rate`, `Van_type`, `Comodity`, `Warning`, `RateConfirmation`) VALUES (NULL, 'Pickup', '213', '23', 'Delivery', '23', '23', '45654', '54654', '456', 'van', 'Comodity', 'Warning', '$file')");

                echo "<br> file name is:   $filename ";
                echo "<br> file type is:   $ext ";
                echo "<br> UPLOADED";
            }
            break;
        case "png":
            $file = "RC/".$_FILES['path']['name'] . uniqid('_UT_').'.png';
            if (move_uploaded_file($_FILES['path']['tmp_name'], $file) && $_FILES["path"]["size"] < 512000) {
                $sql_rc = mysqli_query($connect, "INSERT INTO `load_bord`(`id`, `Pickup`, `Pickup-date`, `Pickup-time`, `Delivery`, `Delivery-date`, `Delivery-time`, `Loaded_Miles`, `Weight`, `rate`, `Van_type`, `Comodity`, `Warning`, `RateConfirmation`) VALUES (NULL, 'Pickup', '213', '23', 'Delivery', '23', '23', '45654', '54654', '456', 'van', 'Comodity', 'Warning', '$file')");

                echo "<br> file name is:   $filename ";
                echo "<br> file type is:   $ext ";
                echo "<br> UPLOADED";
            }
            break;
        default:
                echo "Warning!!! This file is not in the appropriate format or too big";
        break;
    }
}
?>

<!-- <script>
    window.location.href = 'main.php';
</script> -->