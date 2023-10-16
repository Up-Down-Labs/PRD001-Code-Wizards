<?php

use function PHPSTORM_META\sql_injection_subst;

$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$feedback=$_POST["name"];
$conn=mysqli_connect("localhost","root","","database") or die("connection failed"); 
$sql="INSERT INTO data1_table(first_name,last_name,email,feedback)VALUES('{$firstname}','{$lastname}','{$email}','{$feedback}')";
$result=mysqli_query($conn,$sql)or die("Query failed");
?>