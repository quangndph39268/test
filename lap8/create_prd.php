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

if (isset($_POST['name']) &&
    isset($_POST['price']) &&
    isset($_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "insert into prd (name, price, description) values ('$name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Product successfully create";
    } else {
        echo "Error Occured while creating product" . $conn->error;
    }
} else {
    echo "required field(s) is missing";
}
$conn->close();
