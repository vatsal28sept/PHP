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
    echo "Connection Eastablished Successfully <br>";
}

$sql = "INSERT INTO `person`(`name`,`city`) VALUES ('parth','Mahesana')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "Data Was Inserted Successfully";
}
else{
    echo "Failed To Data Insert Because Of This Error ---> " . mysqli_error($conn); 
}
?>