<?php 
$host="localhost";
$user="root";
$pass="";
$db="elegant_flora";

$con = new mysqli($host,$user,$pass,$db);
if(!$con){
	echo"There is something with the connection to the database.";
}else{

//if there is no errors collect form data to variables
$oname = $_POST['name'];
$otype= $_POST['type'];
$supp= $_POST['supplier'];


$qry = "INSERT INTO orders ( `product_name`,`product_type`, `supplier`) VALUES ('$oname', '$otype', '$supp')";
$insert = mysqli_query($con, $qry);

if(!$insert){
	echo "Error occurs with inserting data.";
}else{
	echo "The Order Made Successfully.";
}
}

 ?>

