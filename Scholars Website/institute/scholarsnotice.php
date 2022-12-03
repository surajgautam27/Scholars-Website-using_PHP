<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Notice/Result</title>
<link href="singlePageTemplate.css" rel="stylesheet" type="text/css">
    
</head>
<body>

<div class="container"> 
  
  <header> <a href="">
    <h4 class="logo">Scholar's Notice/Results</h4><br>
    </a>
   
  </header>
 
</head>
<body>
<br>
  
 
  
<?php
$conn=mysqli_connect("localhost","root","","sch_info");
$query="select*from sch_notice order by n_id desc limit 0,15";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
	$id=$row['n_id'];
	$title=substr($row['n_title'],0,50);
	?>
	<li style="padding-top:20px;">
	<a style="color:black;"href="notice/<?php echo $row['n_file'];?>"><?php echo $title;?> </a></li>
<?php } ?>
</h4>
<a href="notice.php"><h5 Style="float:right;">Add Notice</a></h5><br>
<a href="morenotice.php"><h4 Style="float:right;">More Notice /Result +   </a></h4>

</body>
</html>
  