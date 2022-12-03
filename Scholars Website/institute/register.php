<!DOCTYPE html>
<html>
<head>
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
	input[type=phone] {
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
    background-color: #DCE1E3;
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
<title> Registration </title>
<body>
<div class="container">
<h2 align="center">Please Fill Your Detail In Interested course</h2>


  <form action="register.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required  autofocus >
      </div>
    </div>
<div class="row">
<div class="col-25">
<label for="lname">last Name</label></div>
<div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your name.." required >
      </div>
</div><div class="row">
      <div class="col-25">
        <label for="dob">Date of Birth</label>
      </div>
      <div class="col-75">      
  <input type="date" name="bday">  
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label for="email">Email ID</label>
      </div>
      <div class="col-75">      
	<input type="email" name="email" autocomplete="on">
      </div>
	  

    </div>
	<div class="row">
      <div class="col-25">
        <label for="phone">Phone No</label>
      </div>
      <div class="col-75">      
	<input type="phone" name="phone" autocomplete="on" required>
      </div>
	  

    </div>
	<div class="row">
      <div class="col-25">
        <label for="courses">Course</label>
      </div>
      <div class="col-75">  <H4>Bridge Course</h4>    
	<input type="checkbox" name="courses[]" value="science">Science
	<input type="checkbox" name="courses[]" value="Management">Management<br>
	<H4>Entrance Preperation</h4>
	<input type="checkbox" name="courses[]" value="Technical">Technical
	<input type="checkbox" name="courses[]" value="Staff Nurse">Staff Nurse
	<input type="checkbox" name="courses[]" value="HA">HA
	<input type="checkbox" name="courses[]" value="Pharmacy">Pharmacy<br>
	<H4>Computer Classes</h4>
	<input type="checkbox" name="courses[]" value="Basic class">Basic class
	<input type="checkbox" name="courses[]" value="Graphics Design">Graphics Design
	<input type="checkbox" name="courses[]" value="Autocad">Autocad
	<input type="checkbox" name="courses[]" value="HTML">HTML
	<input type="checkbox" name="courses[]" value="Computer Hardware">Computer Hardware<br>
	
	<H4>Language Classes</h4>
	<input type="checkbox" name="courses[]" value="English">English
	<input type="checkbox" name="courses[]" value="Korean">Korean
	<input type="checkbox" name="courses[]" value="Japanese">Japanese
	<input type="checkbox" name="courses[]" value="IELTS">IELTS<br>
	
	<H4>Coaching Classes</h4>
	<input type="checkbox" name="courses[]" value="SEE">SEE
	<input type="checkbox" name="courses[]" value="Higher">Higher 
	<input type="checkbox" name="courses[]" value="Bachelor">Bachelor<br>
	<H4>Class of</h4>
	<input type="checkbox" name="courses[]" value="Bank">Bank
	<input type="checkbox" name="courses[]" value="Lok-Sewa">Lok-Sewa
	<input type="checkbox" name="courses[]" value="Teacher Service">Teacher Service
	<input type="checkbox" name="courses[]" value="Comission">Comission<br><br>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="comment">Comment</label>
      </div>
      <div class="col-75">
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="picture">Picture</label>
      </div>
      <div class="col-75">      
	<input type="file" name="image"><br><br><br>
	 <input type="submit" value="Submit" name="submit">
	  <input type="reset" class="reset">
      </div>
    </div>
	    
      
    
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","sch_info");

if(isset($_POST['submit']))
{
	 $fname=$_POST['firstname'];
	  $lname=$_POST['lastname'];
 $dob=$_POST['bday'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $courses=implode(',',$_POST['courses']);
 $comment=$_POST['comment'];
	 $image_name=$_FILES['image']['name'];
	 $image_type=$_FILES['image']['type'];
	 $image_size=$_FILES['image']['size'];
	 $image_temp=$_FILES['image']['tmp_name'];
	
	if($image_type=="image/jpeg" or $image_type=="image/gif" or $image_type="image/png")
	{
		move_uploaded_file($image_temp,"image/$image_name");
	}
$query=mysqli_query($conn,"insert into sch_table(fname,lname,birth,email,phone,course,comment,picture)
                    values('$fname','$lname','$dob','$email','$phone','$courses','$comment','$image_name')");
if($query==true)
{
	echo "<center><h2>Data has been insert</h2></center>";
}
else
{
	echo"<center><h2>Unable to insert</h2></center>";
}
	
											
}?>