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
$email=$_POST["email"];
$pw=$_POST["pwd"];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($conn) {
       
$sql="Select *from register where email='$email' and password='$pw';";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($result))
{

$user=$row['email'];
$pass=$row['password'];
if($user==$email && $pass== $pw)
{
echo "<script type='text/javascript'>alert('login successfull!')</script>";
header( "refresh:0; url=dash_home.html");break;
}
else
{
echo "<script type='text/javascript'>alert('incorrect username or password!')</script>";
break;
}
}

}else
echo "Connection failed";
?>

    </body>
</html>