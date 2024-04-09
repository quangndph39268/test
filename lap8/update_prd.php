<?php
header('Access-Control-Allow-Origin: *');
$ser = "localhost";
$u = "root";
$p = "";
$db = "angular";

$conn = new mysqli($ser, $u, $p, $db);

if ($conn->connect_error) {
    die("connect failed:" . $conn->connect_error);
}

if (isset($_POST['pid']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {
    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "update prd set name='$name',price='$price',description='$description' where pid='$pid'";

    if ($conn->query($sql) === TRUE) {
        echo "Product successfully update";
    } else {
        echo "Error Occured while update product" . $conn->error;
    }
} else {
    echo "required field(s) is missing";
}
$conn->close();