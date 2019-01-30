<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $sid=$_POST['state'];
    $name=$_POST['dname'];
    $sql="INSERT INTO `district` ( `sid`,`dname`) VALUES('$sid','$name')";
    $sq=mysqli_prepare($con,$sql);
    if(mysqli_execute($sq)){
        echo "executed successfully";
    }
}