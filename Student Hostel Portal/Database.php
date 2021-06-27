<?php 
/*connect to Database */
$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url,$username,$password, "studenthostelportal");

if(!$conn){
    die('could not connect to Database');
}

?>
