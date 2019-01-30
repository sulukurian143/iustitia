<?php
include "connect.php";
?>
<html>
<head>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getState.php",
	data:'country_id='+val,
	success: function(data){
		$("#state").html(data);
		getDistrict();
	}
	});
}


function getDistrict(val) {
	$.ajax({
	type: "POST",
	url: "getDistrict.php",
	data:'state_id='+val,
	success: function(data){
		$("#district").html(data);
	}
	});
}

</script>
</head>
<form action="insertperson.php" method="post">
<table>
    <tr>
        <td> country
        </td>
        <td>
            <select name="country" id="country" onChange="getState(this.value);">
            <option value disabled selected>Select Country</option>
            <?php
            $sql="SELECT * FROM `country`";
            
            $res=mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($res)) {
            echo "<option value='".$row['cid']."'>".$row['cname']."</option>";
            }
            ?>
            </select>
        </td>
        </tr>
        <tr>
        <td> State
        </td>
        <td>
            <select name="state" id="state" onChange="getDistrict(this.value);">
            <option value="">Select State</option>
            </select>
        </td>
        </tr>
        <tr>
        <td> District
        </td>
        <td>
            <select name="district" id="district" >
            <option value="">Select District</option>
            </select>
        </td>
        </tr>
        <tr>
        <td> Name
        </td>
        <td>
            <input type="text" name="name">
        </td>
    </tr>
    <tr>   
        <td></td>
        <td>
        <input type="submit" value="Add" name="submit">
        </td>
    </tr>

</table>
</form>
</html>