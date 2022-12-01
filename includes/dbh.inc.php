<?php

//$servername = "localhost";
//$dBUsername = "root";
//$dBPassword = " ";
//$dBName = "lgsysdb"; 

$conn = mysqli_connect("localhost","root","","lgsysdb");

if(!$conn)
{
die("Connection Failed!".mysqli_connect_error());
	
}