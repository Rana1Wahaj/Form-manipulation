<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "clearPath";

$conn = mysqli_connect($server, $user, $password, $dbname);
// echo "Id is $userId <br> first name is $firstName <br> last name is $lastName <br> contact number is $contact_No <br> address is $address <br> salary is $salary <br> and the email is $email "
if (isset($_POST['submit'])){  
  
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $contact_No=$_POST['contact_No'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];
    
    $password=$_POST['password'];

    $sql= mysqli_query($conn,"SELECT * from user where email = '$email'");
    
    
    if (mysqli_num_rows($sql)>0){
      echo "Email Already exist";
    }

    else{

    $query = "insert into user (firstName,lastName,contact_No,address,salary,email,password) values('$firstName', '$lastName','$contact_No','$address','$salary', '$email','$password')";

    $run = mysqli_query($conn, $query);
    if($run){

        echo "Form submitted successfully";
    }

  else {
    
   echo "Form not Submitted";
  }
 
}

}



?>
