<?php
error_reporting(0);
$FLAG=file_get_contents('/flag');
$con=mysqli_connect("localhost","smity","lzy12315","p3rh4ps"); 
$username=$_POST['username'];
$password=$_POST['password'];

if ($_POST['password']==="OhyOuFOuNdit"){
    die("<div class='logo'>$FLAG</div>");
}
if(preg_match("/select|=|\"|\'|union|or|and|select|date|insert|sleep|ext|update|ascii|substr|and|&|;|-|mid|like/i",$username)){
    die("<script>alert('Stop hacking!')</script>");
}
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";

$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

	if($row)
	{
        echo "<div class='logo'>I needs to be stronger</div>";
  	}
	else 
	{
	
	echo "<div class='logo'>I am soo afraid you to hack me!!!</div>";
	
	}

?>
