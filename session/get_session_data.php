<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome " . $_SESSION['username'];
    echo "<br> Your Favourite Category is " . $_SESSION['favCat'];
    echo "<br>";
}
else{
    echo "Please Login To Continue";
}
?>