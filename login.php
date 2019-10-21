<?php
$servername = "localhost";
$username = "root";
$password = "Lannister123";

unm=$_post['uname'];
pw=$_post['pwd'];

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn) {
    mysql_select_db("mydb",$conn);
    
$result = mysql_query("SELECT * FROM login");
while($row=mysql_fetch_array($result))
{
$user=$row['username'];
$pass=$row['password'];
}
$num=mysql_num_rows($result);echo $num;
for($i=1;$i<=$num; $i++){

if($unm == $user && $pw==$pass)
{
echo "welcome";
}
else
{
echo("Please Enter Correct Username and Password ...");
}
}
}
echo "Connected successfully";
?>
