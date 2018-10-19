
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
text-align:center;

}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
padding-right:10em;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 15%;

}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 20px 0 10px 0;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 10px;
 

}

uname {
padding-left:50px;
   width:20%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<center><h2>Wedding Card Order</h2></center>

<form method="post" action="insert.php">
  <div class="imgcontainer">
    <img src='B1.jpg' alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="fname" ><b>First Name</b></label>
    <input type="text" placeholder="Enter firstname" name="fname" required  >
<br>
    <label for="lname" ><b>Last Name</b></label>
    <input type="text" placeholder="Enter lastname" name="lname" required >
<br>
<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter address" name="address" required >
<br>
    <label for="email"><b>Email ID</b></label>
    <input type="text" placeholder="Enter email address" name="email" required >
<br>
    <label for="phone"><b>Phone No</b></label>
    <input type="text" placeholder="Enter phone " name="phone" required>
<br>
    <label for="cardno"><b>Card No</b></label>
    <input type="text" placeholder="Enter card no" name="cardno" required>
<br>
<label for="cardqty"><b>Card Quantity</b></label>
    <input type="text" placeholder="Enter card quantity" name="cardqty" required>
<br>
<label for="date"><b>Delivery Date</b></label>
    <input type="date" placeholder="Enter date" name="date" required>
<br>


 <button type="submit" value="submit" name="login">Submit</button>
 </label>
  </div> 
</form>

</body>
</html>

<?php


$server="localhost";
$username="root";
$password="";
$db="Wedding";
$fname="";
$lname="";
$email="";
$address="";
$phone="";
$cardno="";
$cardqty="";
$time="";
$con=mysqli_connect($server,$username,$password,$db);
if($con){
	echo "Connected";
}
else
{
	echo "Not Connected";
}
//$fname=$_POST['fname'];
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname= mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$phone= mysqli_real_escape_string($con, $_POST['phone']);
$cardno = mysqli_real_escape_string($con, $_POST['cardno']);
$cardqty = mysqli_real_escape_string($con, $_POST['cardqty']);
$time = mysqli_real_escape_string($con, $_POST['date']);
		
/*$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$cardno=$_POST['cardno'];
$cardqty=$_POST['cardqty'];
$date=$_POST['date'];*/
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
	if(isset($_POST['login']))
	{
		/*$sql="insert into register values('$fname','$lname','$email','$address','$phone','$cardno','$cardqty','$date')";
		$result=mysqli_query($con,$sql);
		if($result>0)
		{
			echo"Record added successfully";
		}*/
		$query = "INSERT INTO users (fname, lname, email,address,phone,cardno,cardqty,time)VALUES('$fname', '$lname','$email','$address','$phone','$cardno','$cardqty','$time')";
			mysqli_query($con, $query);
			header('location: insert.php');
	}

}
/*if(isset($_POST['submit']))
{
	echo "hello";
	//$con=mysqli_connect("localhost","root","","wedding");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$cardno=$_POST['cardno'];
$cardqty=$_POST['cardqty'];
$date=$_POST['date'];
echo $fname;
$insert=mysqli_query($con,"INSERT INTO `order`(`fname`,`lname`,`address`,`email`,`phone`,`cardno`,`cardqty`,`date`)
VALUES('$fname','$lname','$address','$email','$phone','$cardno','$cardqty','$date')");
if(!$insert)
{
	echo mysqli_error();
}
else
{
	
	echo"insert";
}
mysqli_close($con);
}
*/
?>