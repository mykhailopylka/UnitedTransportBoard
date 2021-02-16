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
                            <input class="find-loads__city" type="text" placeholder="City, State, ZIP">
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

        <div class="conteiner">
            <section class="advanced" id="closeAdvansed">
                <div class="advanced__head">
                    <h2>Advanced Search</h2>
                </div>
                <div class="advanced__form">
                    <form class="advanced__form-lines" action="/" method="POST">
                        <div class="advanced__form-item">
                            <h3>Pickup Date Range</h3>
                            <input class="advanced__form-input" type="date">
                            <input class="advanced__form-input" type="date">
                        </div>
                        <div class="advanced__form-item">
                            <h3>Delivery Date Range</h3>
                            <input class="advanced__form-input" type="date">
                            <input class="advanced__form-input" type="date">
                        </div>
                        <div class="advanced__form-item">
                            <h3>Loads Miles</h3>
                            <input class="advanced__form-input input-color" type="text" value="0">
                            <input class="advanced__form-input input-color" type="text" value="1000">
                        </div>
                        <div class="advanced__form-item">
                            <h3>Stops</h3>
                            <input class="advanced__form-input input-color stops-left" type="text" value="0">
                            <input class="advanced__form-input input-color stops-right" type="text" value="1000">
                        </div>
                        <!-- load number -->
                        <div class="advanced__form-item">
                            <input class="advanced__form-load" type="text" placeholder="Load Number">
                        </div>
                        <!-- btns -->
                        <div class="advanced__form-item advanced__form-btn">
                            <input class="advanced__form-typebtn"  type="reset" value="Clear Search">
                            <button class="advanced__form-typebtn">Search</button>
                        </div>
                    </form>

                </div> <!-- /.advanced__form-->
            </section>

            <!-- loads --------------------- -->
            <section class="loads">
                <div class="loads__head">
                    <div class="loads__head-left">
                        <h5>
                            Available Loads
                        </h5>
                        <span class="loads__number" name="loads_number">(8)</span>
                    </div>

                    <div class="loads__head-right">
                        <p class="loads__head-update">
                            Last Update:
                        </p>
                        <!-- time block -->
                        <div id="loads__head_time_block"></div>
                        <!-- end time block -->
                        <div class="loads__head-refresh" id="loads__head-refresh">
                            <form class="loads__head-btn" id="loads__head-btn" action="#">
                                <button type="submit" value = "Refresh" onclick="history.go(0)">
                                </button>   
                            </form>                            
                        </div>
                        <!-- створити функцію закриття та відкриття бокового меню пошуку js -->
                        <div class="loads__head-advanced" onclick="closeAdvansed()">
                            <span>Advansed search</span>
                        </div>

                    </div>
                </div>
                <!-- Add loads --------- -->
                <div class="loads-list__item" onclick="AddLoad()">
                        <span class="loads-list__btn" >
                            Add load
                        </span>
                </div>
                <div id="mySidenavAdd" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeAdd()">&times;</a>
                    <div class="sidenav__content add_loads">
                        <form action="vendor/create.php" enctype="multipart/form-data" method="post">
                            <div class="add_loads-item">
                                <span>Pickup</span>
                                <input class="add_loads-input" type="text" name="Pickup" placeholder="Input pickup place">
                            </div>
                            <div class="add_loads-item">
                                <span>Pickup Date</span>
                                <input class="add_loads-input" type="date" name="Pickup_date" placeholder="Input pickup time">
                            </div>
                            <div class="add_loads-item">
                                <label for="Pickup_time">Pickup time:</label>
                                <input class="add_loads-input" type="time" id="appt" name="Pickup_time" min="00:00" max="24:00" required>
                            </div>
                            <div class="add_loads-item">
                                <span>Delivery</span>
                                <input class="add_loads-input" type="text" name="Delivery" placeholder="Input delivery place">
                            </div>
                            <div class="add_loads-item">
                                <span>Delivery date</span>
                                <input class="add_loads-input" type="date" name="Delivery_date" placeholder="Input delivery time">
                            </div>
                            <div class="add_loads-item">
                                <label for="Delivery_time">Delivery time:</label>
                                <input class="add_loads-input" type="time" id="Delivery_time" name="Delivery_time" min="00:00" max="24:00" required>
                            </div>
                            <div class="add_loads-item">
                                <span>Loaded Miles</span>
                                <input class="add_loads-input" type="text" name="Loaded_Miles" placeholder="Input loaded miles">
                            </div>
                            <div class="add_loads-item">
                                <span>Weight</span>
                                <input class="add_loads-input" type="text" name="Weight" placeholder="Input load's weight">
                            </div>
                            <div class="add_loads-item">
                                <span>Rate</span>
                                <input class="add_loads-input" type="text" name="rate" placeholder="Input load's price">
                            </div>                            
                            <div class="add_loads-item">
                                <h3>Type of van:</h3>
                                <div class="add_loads-item__choose">
                                    <div class="add_loads-item__choose-type">
                                        <input type="radio" id="van" name="type" value="Dry Van">
                                        <label for="male">Dry Van</label>
                                    </div>
                                    <div class="add_loads-item__choose-type">
                                        <input type="radio" id="reefer" name="type" value="Reefer">
                                        <label for="female">Reefer</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Add RC file --------------------- -->
                            <div class="add_loads-item">
                                <input type="file" name="path" title="Choose your rate confirmation"/>
                            </div>
                            <!-- /add rc --------------------------- -->
                            <span>Comodity</span><br>
                            <textarea class="add_loads-text" name="Comodity" placeholder="Describe the load"></textarea><br>

                            <span>Warning</span><br>
                            <textarea class="add_loads-text" name="Warning" placeholder="Describe warnings of the load"></textarea><br>

                            <button class="loads-list__btn add__btn" type="submit">Add load</button>
                        </form>



                        <!-- ====================== -->

                        <!-- your html input type must be file -->
                        
                        <form action="rc.php" enctype="multipart/form-data" method="post">
                            <input type="file" name="path" title="Choose your rate confirmation"/></br>
                            </br>
                        <!--    <input type="file" name="path1" title="Выберите второй файл"/> </br>-->
                        <!--    </br>-->
                            <input type="submit" name="button" /> </br>
                        </form>


                        <!-- ====================== -->


                    </div>
                </div> <!--/Add loads  -->
             
                
                <!-- loads list ----------------- -->
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
                            <!-- <td class="loads-list__item loads-list__item--1">NUM101011</td>
                            <td class="loads-list__item loads-list__item--2">Hammond, IL
                                <p>7:01 AM</p>
                            </td>
                            <td class="loads-list__item loads-list__item--3">Detroit, MI
                                <p>5:01 PM</p></td>
                            <td class="loads-list__item oads-list__item--4">450</td>
                            <td class="loads-list__item loads-list__item--5">42 655 lbs</td>
                            <td class="loads-list__item loads-list__item--6">1400 $</td>
                            <td class="loads-list__item loads-list__item--7">Dry Van</td>
                            <td class="loads-list__item" onclick="openNav()">
                                <span class="loads-list__btn" >Booking Info</span>
                            </td> -->

                            <?php
                            $value = mysqli_query($connect, "SELECT * FROM `load_bord`");
                            $result = mysqli_fetch_all($value);
                            // var_dump($result);
                            //print_r($result);

                            $book_id = array();

                            foreach ($result as $value ){
                                echo '<tr class="loads-list__row">
                                        <td class="loads-list__item loads-list__item--1">
                                            '. $value[0] .'  <!-- конкотенація, вставляєм елементи-->
                                        </td>
                                        <td class="loads-list__item loads-list__item--2">
                                            '. $value[1] .'
                                            <br>
                                            '. $value[11] .'
                                            <br>
                                            '. $value[2] .'
                                        </td>
                                        <td class="loads-list__item loads-list__item--3">
                                            '. $value[3] .'
                                            <br>
                                            '. $value[12] .'
                                            <br>
                                            '. $value[4] .'
                                        </td>
                                        <td class="loads-list__item loads-list__item--4">
                                            '. $value[5] .'
                                        </td>
                                        <td class="loads-list__item loads-list__item--5">
                                            '. $value[6] .' lbs
                                        </td>
                                        <td class="loads-list__item loads-list__item--6">
                                            '. $value[7] .' $
                                        </td>
                                        <td class="loads-list__item loads-list__item--7">
                                            '. $value[8] .'
                                        </td>
                                        
                                        <td class="loads-list__item">
                                          <a class="loads-list__btn" href="view.php?id='. $value[0] .'">Booking Infow</a>
                                        </td> 

                                        <td>
                                            <a href="update.php?id='. $value[0] .'">Update</a>
                                        </td>
                                        <td>
                                            <a href="vendor/delete.php?id='. $value[0] .'">Covered</a>
                                        </td>
                                    </tr>';      
                            }                            
                            ?>
                    </table>
                </div>
            </section> <!-- /.loads ------------>

        </div> <!-- /.conteiner   -->
    </main>
    <footer class="footer"></footer>
</div>

<script src="assets/js/app.js"></script>

<!-- Add loads --------- -->
<script>
    function AddLoad() {
        document.getElementById("mySidenavAdd").style.width = "67%";
    }

    function closeAdd() {
        document.getElementById("mySidenavAdd").style.width = "0";
    }
</script>

<!-- Load info -->
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "67%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>

<!-- Advansed search -->
<script>
    function openAdvansed() {
        document.getElementById("openAdvansed").style.width = "30%";
    }

    function closeAdvansed() {
        document.getElementById("closeAdvansed").style.width = "0";
    }
</script>


<!-- Advansed search -->
<script>
    function () {
    $('.main-myButton').click(function() {
      $('.content').slideToggle();
    });
  };
</script>
</body>
</html>
