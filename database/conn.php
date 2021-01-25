<?php 
//Make connection to databasee
$conn = mysqli_connect('localhost','root','','paystack_student_payment');

//Database connection test
if(!$conn){
    die("database connection error");
}

?>