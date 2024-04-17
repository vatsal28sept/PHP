<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Was Failed" . mysqli_connect_error());
} else {
    echo "Connection Was Successful";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    // Concatenation should use proper format
    $sql = "INSERT INTO `contactus`(`name`, `email`, `concern`) 
            VALUES ('$name', '$email', '$desc')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data Inserted Successfully";
    } else {
        echo "Data Was Not Inserted: " . mysqli_error($conn);
    }
}
?>
