<?php
$connection = mysqli_connect(
    DB_HOST, 
    DB_USERNAME, 
    DB_PASSWORD, 
    DB_NAME
); 

if(!$connection){
    echo 'Something went wrong! Cannot connect to database';
    die();
}
?>