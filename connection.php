<?php

$server = "localhost";
$db = "login";
$username = "root";
$password = "";


$conn = mysqli_connect($server, $username, $password, $db);

if($conn)
{
	echo "Database is :)) 👍 <br>";
}
else
{
	echo "Database is :(( 👎 <br>".mysqli_error($conn);
}

if(isset($_POST['user']))
{

$username = $_POST['user'];
$password = $_POST['text'];

$sql = "SELECT * FROM users where username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1)
{
	echo "YESSSSS GUMANA SIYA";
}
else
{
	echo "AAAAAAA MALI LOGIN MO";
}

}

?>