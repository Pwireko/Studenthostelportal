<?php

$conn = mysqli_connect('localhost','root','');
$db = 'shp';

if(!$con){
    echo 'Not Connected';
}

if (mysqli_select_db($conn,$db)){
    echo 'Database Selected';
}

$Uname =  $_POST['Uname'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Pnumber =$_POST['Pnumber'];
$Hname = $_POST['Hname'];
$Location =$_POST['Location'];

$sql = "INSERT INTO hosteller (Uname, Password, Email, Pnumber, Hname, Location) VALUES ('$Uname','$Password','$Email','$Pnumber','$Hname','$Location')";

if(!mysqli_query($conn,$sql)){
    echo 'Not Inserted';
}
        header("Location:Dashboard.php?status=success");

    
?>
