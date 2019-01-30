<?php
include "connect.php";
if (! empty($_POST["state_id"])) {
    $query = "SELECT * FROM `district` WHERE `sid` = '" . $_POST["state_id"] . "'";
    $res=mysqli_query($con,$query);
    ?>
     <option value disabled selected>Select District</option>
     <?php
    while($row = mysqli_fetch_assoc($res)) {
    //    echo "<option value='".$row['sid']."'>".$row['sname']."</option>";
  ?>  
 
<option value="<?php echo $row["did"]; ?>"><?php echo $row["dname"]; ?></option>
<?php
    }
    }
//}
?>
