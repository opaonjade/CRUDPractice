<?php

$con = mysqli_connect('localhost', 'root','', 'student');

if(!$con) {
    die('Connection Failed'. mysqli_connect_error());
}

?>