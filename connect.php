<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

//Database connection
$conn = mysql ('localhost'.'root'.'test'.'register'); 
if($conn->connect_error){
    die('connection Failed  : '.$conn->connect_error);
    }else{
    $stmt = $conn->prepare("insert into registration(firstname, email, password,)
        values(?, ?, ?,)");
     $stmt->bind_param("sss",$firstName, $email, $password);
     $stmt->execute();
     echo "registration Successfully...";
     $stmt->close();
     $stmt->close();
    }
?>

   