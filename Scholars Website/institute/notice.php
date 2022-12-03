
<?php
session_start();
if(!$_SESSION['user_name'])
{
	header('location:login_notice.php');
}

else
{
	?>
	<!doctype html>
<html>
<head>
<title>Notice</title>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid green;
    border-radius: 4px;
    resize: vertical;
}
input[type=email] {
width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	}
input[type=date]{ width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
	}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
	margin-left:40%;
}
input[type=reset] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 25px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 30%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 70%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>
<h2 align="center">Notice</h2>
<div class="container">
<form action="notice.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-25">
<label for="notice">Notice Title</label>
</div>
<div class="col-75">
<input type="text"  name="noticetitle" placeholder="Your notice.." required autofocus>
</div>
</div>

	<div class="row">
      <div class="col-25">
        <label for="notice">Notice File</label><br>
		
      </div>
      <div class="col-75">      
	<input type="file" name="image">
	<a href="logout.php"><h4 Style="float:right;">Log Out </a></h4>
      </div>
    </div>
	</div>


	
	
      <input type="submit" value="insert" name="insert">
	 
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","sch_info");
if(isset($_POST['insert']))
{
	$title=$_POST['noticetitle'];
 $image_name=$_FILES['image']['name'];
	 $image_type=$_FILES['image']['type'];
	 $image_size=$_FILES['image']['size'];
	 $image_temp=$_FILES['image']['tmp_name'];
	
	if($image_type=="image/docx" or $image_type=="image/doc" or $image_type="image/pdf")
	{
		move_uploaded_file($image_temp,"notice/$image_name");
	}
	else{
			echo "<script> alert('file not matched')</script>";
	}
				
	$query=mysqli_query($conn,"insert into sch_notice(n_title,n_file)
	                                                    values('$title','$image_name')");
			if($query==true)
			{
				echo"<center><h1>Data has been inserted</h1></center>";
			}
			else
			{
				echo"<center><h1>unable to insert</h1></center>";
			}

}?>
<?php
}
?>