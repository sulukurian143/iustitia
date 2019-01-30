<?php
include "connect.php";
if(isset($_POST['submit']))
{
$name=$_POST['cname'];
$sql="INSERT INTO `country` ( `cname`) VALUES('$name')";
$sq=mysqli_prepare($con, $sql);
if(mysqli_execute($sq)){
    echo "executed successfully";
}
}