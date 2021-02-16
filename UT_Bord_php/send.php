<?php
//вставляємо файл для підєднання до бази данних
require 'config/conection.php';
//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <!-- Useful meta tags -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">

    <link rel="icon" href="img/favicon.png" type="image" />


    <title>United Transport | Home</title></head>
<body>
<div class="page">
    <div class="header__menu">
        <ul class="header__menu-left">
            <li class="header__menu-item">
                <a href="main.php">Load Board</a>
            </li>
            <li class="header__menu-item">
                <a href="update.html">Get a Qote</a>
            </li>
            <li class="header__menu-item">
                <a href="#">Track Shipment</a>
            </li>
        </ul>
        <a href="#">Login</a>
    </div>
    <main class="main">

        <section class="main__menu">
            <div class="main__menu-left">
                <a href="index.html">
                    <img class="main__manu-logo" src="assets/images/logo.webp" alt="logo">
                </a>
                <ul class="main__menu-list">
                    <li class="main__menu-item">
                        <a href="#">our technology</a>
                    </li>
                    <li class="main__menu-item">
                        <a href="#">shipment solution</a>
                    </li>
                    <li class="main__menu-item">
                        <a href="#">carrier solutions</a>
                    </li>
                    <li class="main__menu-item">
                        <a href="#">our company</a>
                    </li>
                    <li class="main__menu-item">
                        <a href="#">contact us</a>
                    </li>
                </ul>
            </div>
            <div class="search-icon">
                <form class="search" action="/" method="POST">
                    <input class="search__input" type="text" placeholder="Search">
                </form>
            </div>
        </section>  <!-- /.main__menu  -->
    </main>


<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['RateConfirmation']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($email);
 $fio = urldecode($fio);
 $email = urldecode($email);
 $fio = trim($fio);
 $email = trim($email);
 if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>
</body>
</html>