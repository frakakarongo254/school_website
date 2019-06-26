<?php
include('include/config.php');
if (isset($_POST['signup'])) {
$fName=$_POST['fName'];
$lName=$_POST['lName'];
 $email=$_POST['email'];
$password=$_POST['password'];
$school_name=$_POST['school_name'];
$phone=$_POST['phone'];
$numberOfStudent=$_POST['numberOfStudent'];

$registrationDate = date_create()->format('Y-m-d');
       $authentication_key = substr(number_format(time() * rand(),0,'',''),0,10);
      $datetime = date_create()->format('Y-m-d H:i:s');
       $school_ID= md5($authentication_key);

 $query=mysqli_query($conn,"select * FROM `admin` where  `email`='".$email."'");
         if($query->num_rows == 0){
          $query=mysqli_query($conn,"insert into `admin` (school_ID, first_name,second_name,email,password,registration_Date,phone,role,authentication_key) values('$school_ID',
      '$fName','$lName','$email','$password','$registrationDate','$phone','Super Admin','$authentication_key')");
          $query2=mysqli_query($conn,"insert into `school` (school_ID, school_Name,registration_Date) values('$school_ID',
      '$school_name','$registrationDate')");
      if($query &&  $query2){
      
        echo'Success! you have registered successfully';
      }else{
            
             echo"OOp! Something went wrong.Please try again!";
      }
         }else{
            echo "That email already exist";
             
         }
     
}
?>







