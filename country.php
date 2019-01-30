<?php
include "connect.php";
?>
<html>
<form action="insertcountry.php" method="post">
<table>
    <tr>
        <td> country
        </td>
        <td>
            <input type="text" name="cname">
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