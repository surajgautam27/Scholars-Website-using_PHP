<!doctype html>
<html lang="en-US">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.login
{
	float:right;
}
</style>
<title>Contact</title>


   
</head>
<body>
<form action="contact.php" method="post" enctype="multipart/form-data">
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <h3> leave  a message For Scholars Institute</h3>
  </div>
  <div class="row">
    <div class="column">
      <img src="picture/computer.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
        <label for="phone">Phone No</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number.." required>
               <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." required style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
		 <a class="login" href="contact_table.php">View Contact</a>
    </div>
  </div>
</div>
<?php
$conn=mysqli_connect("localhost","root","","sch_info");

if(isset($_POST['submit']))
{
	 $fname=$_POST['firstname'];
 $lname=$_POST['lastname'];
 $phone=$_POST['phone'];
 $subject=$_POST['subject'];

$query=mysqli_query($conn,"insert into sch_contact(fname,lname,phone,subject)
            values('$fname','$lname','$phone','$subject')");
if($query==true)
{
	echo "<center><h2>Data has been insert</h2></center>";
}
else
{
	echo"<center><h2>Unable to insert</h2></center>";
}
	
											
}?>
</body>
</html>
