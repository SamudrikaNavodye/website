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
$stname = $_POST['stname'];
$stemail= $_POST['stemail'];
$stcontact= $_POST['stcontact'];
$staddress= $_POST['staddress'];
$password= $_POST['password'];


$qry = "INSERT INTO staff ( `st_name`, `st_email`, `st_contact`,`st_address`, `password`) VALUES ('$stname', '$stemail', $stcontact,'$staddress', '$password')";
$insert = mysqli_query($con, $qry);

if(!$insert){
	echo "Error occurs with inserting data.";
}else{
	echo "Staff Registration Successfull.";
}
}

 ?>

