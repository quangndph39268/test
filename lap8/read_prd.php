<?php 
header('Access-Control-Allow-Origin: *');
$ser = "localhost";
$u="root";
$p="";
$db="angular";

$conn=new mysqli($ser,$u,$p,$db);

if($conn->connect_error){
    die("connect failed:".$conn->connect_error);
}

$sql = "select * from prd";
$resuilt = $conn->query($sql);

if($resuilt-> num_rows > 0){
    $products = array();
    while($row = $resuilt->fetch_assoc()){
        $products[] = $row;
    }
    echo json_encode($products);
}else{
    echo '0 resuilts';
}

$conn->close();
?>