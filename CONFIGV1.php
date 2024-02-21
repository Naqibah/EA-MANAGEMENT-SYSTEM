<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host="localhost";
$username = "root";
$password = "";
$dbname = "eamanagement";

//create connection
$conn = mysqli_connect($host, $username,$password,$dbname);
//check connection
if(!$conn){
	echo"Connection failed";
}
