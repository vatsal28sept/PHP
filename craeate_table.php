<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbvatsal";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Connection Was Failed " . mysqli_connect_error());
}
else{
    echo "Connection Was Successful <br>";
}

$sql = "CREATE TABLE `person`(`person id` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL , `city` VARCHAR(12) NOT NULL , PRIMARY KEY(`person id`))";
$result = mysqli_query($conn,$sql);

if($result){
    echo "The Table Was Created Successfully ";
}
else{
    echo "The Table Was Not Created Successfully Because Of This Error ---> " . mysqli_error($conn);
}
?>