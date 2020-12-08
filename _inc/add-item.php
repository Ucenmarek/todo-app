<?php
//skusobny vypis dat
/*echo '<pre>';
print_r($_POST);
echo '</pre>';

die($_POST['message']);*/
//include
require 'config.php';

// vlozenie do dt
$id = $database->insert('ithems', [
    'text' =>  $_POST["message"],
    'autor' => $_POST["actor"]

]);

// uspešné zapis do dtb a navrat na index
 if ($id){
   /*  echo 'uspesny zapis do dtb <hr>';
    echo '<a href="/tapp/index.php">back home</a>';
    header('location:http://localhost/tapp/index.php');*/
    //echo'ok';
    die('ok');
 }

