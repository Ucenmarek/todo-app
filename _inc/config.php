<!--require-->

<?php require_once 'vendor/autoload.php';

//errors
//\php_error\reportErrors();

//require_once "vendor/catfan/medoo/src/Medoo.php";

use Medoo\Medoo;
// conect to dt
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'todo',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf-8'
]);

