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
$sname = $_POST['sname'];
$semail= $_POST['semail'];
$scontact= $_POST['scontact'];
$saddress= $_POST['saddress'];

$qry = "INSERT INTO supplier ( `s_name`, `s_email`, `s_contact`,`s_address`) VALUES ('$sname', '$semail', $scontact,'$saddress')";
$insert = mysqli_query($con, $qry);

if(!$insert){
	echo "Error occurs with inserting data.";
}else{
	echo "Supplier Registration Successfull.";
}
}

 ?>

