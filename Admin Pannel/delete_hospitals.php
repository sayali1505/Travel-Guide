<?php
include("config.php");
//if(isset($_POST['delete']))
//{

$id=$_POST['h_id'];   
//echo "$id";
$result = mysqli_query($conn, "DELETE FROM tbl_hospital WHERE h_id='$id'") or mysql_error();
//echo "<h2 align='center'><font color=white>Location of id $id Deleted Succesfully.<///font></h2>";
header("Location:all_hospitals.php");
//}


?>