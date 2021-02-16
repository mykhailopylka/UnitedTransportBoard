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
    
    
    <title>United Transport | Update</title></head>
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
            
            <section class="find-loads">
                <h1>
                    Finde Loads
                </h1>
                <div class="find-loads__wrapper">
                    <div class="find-loads__left">
                        <div class="find-loads__item">
                            <span class="find-loads__font">
                                Origin
                            </span>
                            <form class="find-loads__form" action="/" method="POST">
                                <input class="find-loads__city" type="text" placeholder="City, State, ZIP">
                            </form>
                        </div>
                        <div class="find-loads__item">
                            <span class="find-loads__font">
                                DH-O
                            </span>
                            <form class="find-loads__form" action="/" method="POST">
                                <input class="find-loads__dh" type="text" value="100">
                            </form>
                        </div>
                        <div class="find-loads__item">
                            <span class="find-loads__font">
                                Destination
                            </span>
                            <form class="find-loads__form form--destination" action="/" method="POST">
                                <input class="find-origin" type="text" placeholder="City, State, ZIP">
                            </form>
                        </div>
                        <div class="find-loads__item">
                            <span class="find-loads__font">
                                DH-D
                            </span>
                            <form class="find-loads__form form--dhd" action="/" method="POST">
                                <input class="find-loads__dh" type="text" value="100">
                            </form>
                        </div>
                        <div class="find-loads__item">
                            <span class="find-loads__font">
                                Equipment Type
                            </span>
                            <form class="find-loads__form form--type" action="/" method="POST">
                                <input class="find-loads__city" type="text" placeholder="All Equipment">
                            </form>
                        </div>
                    </div>
                    <div class="find-loads__right">
                        <a class="find-loads__btn" href="#" >Search</a>
                    </div>
                </div> <!-- find-loads__wrapper-->
            </section> <!-- /.find-loads-->
            
            

            <!-- loads --------------------- -->
        <div class="conteiner">
            <section class="loads">
                <div class="loads__head">
                    <div class="loads__head-left">
                        <a class="loads-list__btn" href="main.php">Back to board</a>
                    </div>
                </div>
                
             
                <!-- Book info ------- -->
                <div class="book-info">                    
                    <div class="sidenav__content">
                        <div class="loads-list">
                            <table class="loads-list__table">
                                <th class="loads-list__head loads-list__1">United Transport</th>
                                <th class="loads-list__head loads-list__2">Pickup</th>
                                <th class="loads-list__head loads-list__3">Delivery</th>
                                <th class="loads-list__head loads-list__4">Loaded Miles</th>
                                <th class="loads-list__head loads-list__5">Wheight</th>
                                <th class="loads-list__head loads-list__5">Rate, $</th>
                                <th class="loads-list__head loads-list__6">Van type</th>
                                <th class="loads-list__head loads-list__7"> </th>
                                <tr >
                                  
                                <?php
                                $value_id = $_GET['id'];
                                $value_info = mysqli_query($connect, "SELECT * FROM `load_bord` WHERE `id` = '$value_id'");

                                // $value_info = mysqli_query($connect, "SELECT * FROM `load_bord`");
                                $result_info = mysqli_fetch_all($value_info);

                                // var_dump($result);
                                // print_r($result_info);
                                foreach ($result_info as $value_info){
                                    echo '<tr>
                                            <td class="loads-list__item loads-list__item--1">
                                                '. $value_info['0'] .'  <!-- конкотенація, вставляєм елементи-->
                                            </td>
                                            <td class="loads-list__item loads-list__item--2">
                                                '. $value_info[1] .'
                                                <br>
                                                '. $value_info[11] .'
                                                <br>
                                                '. $value_info[2] .'
                                            </td>
                                            <td class="loads-list__item loads-list__item--3">
                                                '. $value_info[3] .'
                                                <br>
                                                '. $value_info[12] .'
                                                <br>
                                                '. $value_info[4] .'
                                            </td>
                                            <td class="loads-list__item loads-list__item--4">
                                                '. $value_info[5] .'
                                            </td>
                                            <td class="loads-list__item loads-list__item--5">
                                                '. $value_info[6] .' lbs
                                            </td>
                                            <td class="loads-list__item loads-list__item--6">
                                                '. $value_info[7] .' $
                                            </td>
                                            <td class="loads-list__item loads-list__item--7">
                                                '. $value_info[8] .'
                                            </td>
                                        </tr>';
                                }
                                ?>
                            </table>
                        </div>


                        <?php
                                $value_info = mysqli_query($connect, "SELECT * FROM `load_bord` WHERE `id` = '$value_id'");

                                // $value_info = mysqli_query($connect, "SELECT * FROM `load_bord`");
                                $result_info = mysqli_fetch_all($value_info);

                                // var_dump($result);
                                // print_r($result_info);
                                foreach ($result_info as $value_info){
                                    echo '
                                        <div class="comments">
                                            <h2>Comodity:</h2>
                                            <p >
                                                '. $value_info[9] .'
                                            </p>
                                        </div>
                                        <div class="comments">
                                            <h2>Warning:</h2>
                                            <p class="comments">
                                                '. $value_info[10] .'
                                            </p>
                                        </div>';
                                }
                            ?>
                       
                        <a class="loads-list__btn loads-list__btn--bookit" href="main.php">Book it!</a>
                                        
                    </div>
                </div> <!-- /book info--------------- -->
            </section> <!-- /.loads ------------>
        </div> <!-- /.conteiner   -->
    </div> <!-- /.page  -->
</body>
</html>
