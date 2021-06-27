<?php

$conn = mysqli_connect('localhost','root','');
$db = 'studenthostelportal';

if(!$conn){
    echo 'Not Connected';
}

if(mysqli_select_db($conn,$db)){
    echo 'Database selected';
}

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$ID = $_POST['ID'];

$sql = "INSERT INTO register (Fname, Lname, Password, Email, Phone, ID) VALUES('$Fname' ,'$Lname','$Password','$Email','$Phone','$ID')";

if(!mysqli_query($conn,$sql)) {
    
    echo 'Not Inserted';
}

else {

    echo 'Inserted';
} 
      header ("Location: Loginstudent.php?status=success");



?>
