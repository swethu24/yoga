<?php
include("dbconfig.php");
global $sql;
global $res;
$sql ="INSERT INTO yoga(name,month,slot) Values('$name','$month','$slot')";
$res = mysqli_query($db,$sql);
if($res)
{
        echo "Booked Successfully";
}
?>