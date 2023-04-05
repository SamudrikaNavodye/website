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
$bname = $_POST['bname'];
$bemail= $_POST['bemail'];
$bcontact= $_POST['bcontact'];
$baddress= $_POST['baddress'];

$qry = "INSERT INTO buyer ( `b_name`, `b_email`, `b_contact`,`b_address`) VALUES ('$bname', '$bemail', $bcontact,'$baddress')";
$insert = mysqli_query($con, $qry);

if(!$insert){
	echo "Error occurs with inserting data.";
}else{
	echo "Buyer Registration Successfull.";
}
}

 ?>

