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

if(isset($_POST['pid'])){
    $pid=$_POST['pid'];
    $sql="delete from prd where pid = '$pid'";

    if($conn->query($sql)=== TRUE){
        echo "Product successfully delete";
    }else{
        echo "Error Occured while delete product".$conn->error;
    }
}else{
    echo "required field(s) is missing";
}
?>