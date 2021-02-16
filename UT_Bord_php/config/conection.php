<?php

/**
 * @author
 * @copyright 2020
 */


$connect = mysqli_connect('localhost', 'root',  'root', 'ut_db');

if (!$connect){
    die('Error connection to datebase!');
}
else{
    echo " All is good!! The conection is complited";
}


?>