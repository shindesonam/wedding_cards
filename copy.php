<?php

$link=mysqli_connect("localhost","root","");
$db=mysqli_select_db($link,"wedding");
if($db)
{
	echo "connected";
}
   
//include "db.php";
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$cardno=$_POST['cardno'];
$cardqty=$_POST['cardqty'];
$date=$_POST['date'];
echo $fname;
$insert=mysqli_query("INSERT INTO `order`(`fname`,`lname`,`email`,`address`,`phone`,`cardno`,`cardqty`,`date`)
VALUES('$fname','$lname','$email','$address','$phone','$cardno','$cardqty','$date')");
//$insert=mysqli_query("INSERT INTO `order` VALUES('$fname','$lname','$email','$address','$phone','$cardno','$cardqty','$date')");																				
if(!$insert)
{
	echo mysqli_error();
}
else
{
	
	echo"insert";
}
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.pen{

Font-size:200%;
color:Black;
}
body{

margin:0;
background:white;
background-size:cover;


}



.penter{

text-align: center;
border: 3px black;

}

div.transbox {
  margin: 20px;
  background-color:white;
  border: 1px solid black;
    box-sizing: border-box;
	width:50%;
	text-align:center;
	position: absolute;
	right: 25%

 
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: Black;
}



</style>
<body >

<div class="pen">
<h2><center>Wedding Card Order </center></h2>
</div>


<div class="transbox">
<div class="penter">
<form class="form-inline" action="">
<br>

<div class="form-group">
      <label for="Name" style="color:Black;">First Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter First Name" name="fname" style="border-color:Black;color:Black;">
    </div>


<div class="form-group">
      <label for="Name" style="color:Black;">Last Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Last Name" name="lname"style="border-color:Black;color:Black;">
    </div>

<br>
<br>

<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:Black;" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" size="50"  style="border-color:Black;color:Black;">
      </div>
    </div>

<br>
<br>

<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:Black;">Address:</label>
      <div class="col-sm-10">
        <input type="address" class="form-control" id="address" placeholder="Enter Address" name="address" size="50"style="border-color:Black;color:Black;">
      </div>
    </div>
<br><br>

    <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:Black;">Phone:</label>
      <div class="col-sm-10">
        <input type="text " class="form-control" id="phone" placeholder="Enter Phone" name="phone"  size="32" style="border-color:Black;color:Black;">
      </div>
    </div>
<br><br>
<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:Black;">Card No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cardno" placeholder="Enter Card No" name="cardno" size="32" style="border-color:Black;color:Black;">
      </div>
    </div>
<br><br>


<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color:Black; text-decoration:none"> Cards Quantity:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cardqty" placeholder="Enter No Of Cards" name="cardqty" size="32" style="border-color:Black;color:Black;">
      </div>
    </div><br><br>




<form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"style="border-color:Black;color:Black;">Delivery Date:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="date" placeholder="Enter Delivery Date" name="date"  size="32" style="border-color:Black;color:Black;">
      </div>
    </div><br><br>
  
<br>
<div style="text-align:center background-color:black">
<input type="submit"  value="submit" name="submit" style="font-size:12pt;color:white;
background-color:black ;border:2px solid black;padding:15px 32px;; <font color='"Red"'><margin-bottom:30px></font>
</div>

<br>
<br>
</form>
</div></div>
</body>
</html>
