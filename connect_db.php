<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Sorry We Failed To Connect: " . mysqli_connect_error());
}
else{
    echo "Connection Was Successful <br>";
}

$sql = "CREATE DATABASE dbvatsal2";
$result = mysqli_query($conn , $sql);

if($result){
    echo "The Db Was Created Successfull";
}
else{
    echo "The Db Was Not Created Successfully Because Of This Error ---> " . mysqli_error($conn);
}
?>