<?php 
$conn=mysqli_connect("localhost","root","","sch_info");
$delete_id=$_GET['delete'];
$query=mysqli_query($conn,"delete from sch_table where sch_id='$delete_id'");
if($query==true)
{
	echo "<script>window.location.href='table.php';</script>";
}
else
{
	echo "unable to delete";
}