<?php
session_start();
if (isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql = mysqli_query($conn, "SELECT * FROM  hosteller WHERE Pnumber ='$Pnumber'and Password='$Password)'");
    $row  = mysqli_fetch_array($sql);
    
    if(is_array($row))
        {
            $_SESSION["Pnumber"] = $row['Pnumber'];
            $_SESSION["Password"] = $row['Password'];
            header("location:Dashboard.php");
        }
        else
            {
                echo"Invalid Number or Password";
            }
}
?>
