<?php
/*$connection = mysqli_connect(
    DB_HOST, 
    DB_USERNAME, 
    DB_PASSWORD, 
    DB_NAME
);*/

$connection_string = "
    host=".DB_HOST." 
    port=".DB_PORT." 
    dbname=".DB_NAME." 
    user=".DB_USERNAME." 
    password=".DB_PASSWORD." 
    options='--client_encoding=UTF8'
";
$connection = pg_connect($connection_string);

if(!$connection){
    echo 'Something went wrong! Cannot connect to database';
    die();
}
?>
