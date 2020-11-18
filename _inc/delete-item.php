<?php
/*skusobny vypis dat
echo '<pre>';
print_r($_POST);
echo '</pre>';

die();*/

/* die($_POST['message']); */
//include
require 'config.php';

// delete  dt
$id = $database->delete
    ('ithems',['id' => $_POST ['id']]

  );

//  navrat na index
 
   
    header('location:'.$site_url.'index.php');
   
    
 

