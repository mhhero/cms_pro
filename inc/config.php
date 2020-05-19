<?php

error_reporting(E_ALL);
    
$connection = mysqli_connect('localhost','root','','cms_pro');


if(!$connection){
    echo 'not connect' . mysqli_connect_error();
}

session_start();

?>