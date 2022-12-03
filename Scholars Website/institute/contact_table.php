<?php
session_start();
if(!$_SESSION['user_name'])
{
	header('location:login_contact.php');
}

else
{
	?>
<!DOCTYPE html>
<html>
<head>
<style>
#student {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#student td, #student th {
    border: 1px solid #DDAF94;
    padding: 8px;
	text-align: center;
}


#student tr:nth-child(even){background-color:White;}

#student tr:hover {background-color: #E8CEBF;}

#student th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color:  #E8CEBF;
    color: white;
}
</style>
</head>
<body>
<form action="contact_table.php" method="get">
<div align="right"><input type="text" name="search" placeholder='search with first name or number' size="30" id="student">

<input type='submit' name='submits' value='search now' id="student">
</div>
</form>
<?php
$conn=mysqli_connect("localhost","root","","sch_info");
if(isset($_GET['submits']))
{
	$search=$_GET['search'];
	$query2="select * from sch_contact where phone='$search' or fname='$search'";
	$run1=mysqli_query($conn,$query2);
	if(mysqli_num_rows($run1)==false)
	{
		echo "<script>alert('no record found')</script>";
	}
	
	else
	{
		?>
		
		<table id="student">
  <tr>
   <th>SN</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone No</th>
	<th>Subject</th>
	<th>Delete</th>
	
  </tr>
		<?php
		while($row=mysqli_fetch_array($run1))
		{
			$fname=$row['fname'];
			$lname=$row['lname'];
			$phone=$row['phone'];
			$subject=$row['subject'];
			?>
		<tr>
		<td><?php echo $fname;?></td>
		<td><?php echo $lname;?></td>
		<td><?php echo $phone;?></td>
		<td><?php echo $subject;?></td>
				  <td><a href='delete.php?delete=<?php echo $row['sch_id'];?>'>Delete</a></td>
		</tr>
		<?php } ?>
		</table>
		<?php
}}?>
<br>

<table id="student">
  <tr>
 <th>SN</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Phone No</th>
	<th>Subject</th>
	<th>Delete</th>
	
  </tr>
  <?php
	  $conn=mysqli_connect("localhost","root","","sch_info");
	  $query="select*from sch_contact";
	  $run=mysqli_query($conn,$query);
	  $i=0;
	  while($row=mysqli_fetch_array($run)){
		 $i++; 
	  
		 $fname=$row['fname'];
			$lname=$row['lname'];
			$phone=$row['phone'];
			$subject=$row['subject'];
		  ?>
		  <tr>
		  <td><?php echo $i;?></td>
		  <td><?php echo $fname;?></td>
		<td><?php echo $lname;?></td>
		<td><?php echo $phone;?></td>
		<td><?php echo $subject;?></td>
				<td><a href='delete.php?delete=<?php echo $row['sch_id'];?>'>Delete</a></td>
	  <?php } ?></tr>
		  </table>
		  <a href="logout.php">Logout</a>
		  

</body>
</html>

<?php
}
?>
