<?php
include "connect.php";
?>
<html>
<form action="insertstate.php" method="post">
<table>
    <tr>
        <td> country
        </td>
        <td>
            <select name="country" id="country" onChange="changecountry()">
            <?php
            $sql="SELECT * FROM `country`";
            $res=mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($res)) {
                echo "<option value='".$row['cid']."'>".$row['cname']."</option>";
            }
            ?>
            </select>
        </td>
        <tr>
        <td> State
        </td>
        <td>
            <input type="text" name="sname">
        </td>
    </tr>
    </tr>
    <tr>   
        <td></td>
        <td>
        <input type="submit" value="Add" name="submit">
        </td>
    </tr>

</table>
</form>

</script>
</html>