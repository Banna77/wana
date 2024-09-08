<?php
$hostname="localhost";
$username="root";
$password="";
$db="waadbana";

$conn=mysqli_connect($hostname,$username,$password,$db);

if($conn){
    echo "YES";
}else{
    die("NO".mysql_connect_error());
}

/*$customer_id = $_POST['customer_id'];
$customer_name = $_POST['customer_name'];
$customer_email = $_POST['customer_email'];
$customer_comment = $_POST['customer_comment'];
$table_place = $_POST['table_place'];

if (isset($_POST['submit'])){
    echo $Name . ' ' . $Email . ' ' . $BookATable . ' ' . $Message;
}*/
?>