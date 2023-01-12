<?php 

require 'dbcon.php'

if(isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students (name,email,contact,phone,course) VALUES ('$name','$email','$contact','$course')";

    $query_run = mysqli_query();
}
?>