<?php
/*skusobny vypis dat
echo '<pre>';
print_r($_POST);
echo '</pre>';

die();*/

/* die($_POST['message']); */
//include
require 'config.php';

// update  dt
$id = $database->update
    ('ithems', 
    ['text' =>  $_POST["message"]],
    ['id' => $_POST ['id']]

  );

// uspešné update do dtb a navrat na index
 if ($id){
   
    header('location:'.$site_url.'index.php');
   
    
 }

