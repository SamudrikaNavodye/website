<?php


  if(isset($_POST['loginButton'])) { 
            login(); 
        }

function connectDb(){
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $name = "elegant_flora";

    $conn = mysqli_connect($host, $user, $pass,$name);
    return $conn; 
}

function login() {
  $conn = connectDb();
  $name = $_POST["name"];
  $password = $_POST["password"];
    
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }

      $sql = "SELECT st_id FROM staff WHERE st_name = '$name' and password = '$password'";
    
$result = $conn->query($sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        header("Location: flower.php");
    exit;  
      }else {
         $error = "Invalid user name password!!";
         echo $error;
      }

        
$conn->close();
}
    

?>