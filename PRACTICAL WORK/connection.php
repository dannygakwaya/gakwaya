<?php
$servername="localhost";
$username="root";
$password="";
$db="bank_account";
$conn=mysqli_connect("localhost","root","",$db);
if($conn==true){
	//echo("connected");
}
else{
	echo("not connected");
}
?>