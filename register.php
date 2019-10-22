<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
$servername = "localhost";
$username = "root";
$password = "";

$database="register";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($conn) {
		$sql=mysqli_query($conn,"insert into register(fname,lname,email,password) values('$fname','$lname','$email','$pwd')");
		echo "<script type='text/javascript'>alert('Registration Complete!')</script>";
                header( "refresh:1; url=login.html");
	}
else {
 echo "Connection failed";
}
?>
