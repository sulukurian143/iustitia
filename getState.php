<?php
include "connect.php";
if (! empty($_POST["country_id"])) {
    $query = "SELECT * FROM `state` WHERE cid = '" . $_POST["country_id"] . "'";
    $res=mysqli_query($con,$query);
    ?>
    <option value disabled selected>Select State</option>
    <?php
    while($row = mysqli_fetch_assoc($res)) {
    //    echo "<option value='".$row['sid']."'>".$row['sname']."</option>";
  ?>  
<option value="<?php echo $row["sid"]; ?>"><?php echo $row["sname"]; ?></option>
<?php
    }
    }
//}
?>
