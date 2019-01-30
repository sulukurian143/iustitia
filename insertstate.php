<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $id=$_POST['country'];
    $name=$_POST['sname'];
    $sql="INSERT INTO `state` ( `cid`,`sname`) VALUES('$id','$name')";
    $sq=mysqli_prepare($con,$sql);
    if(mysqli_execute($sq)){
        echo "executed successfully";
    }
}