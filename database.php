<?php

$hostname="localhost";
$username="root";
$password="";
$db_name="register";
$connection=mysqli_connect($hostname,$username,$password,$db_name);
if(!$connection)
{
	echo "error in connection".mysqli_error($connection);
}

/*$db="CREATE database register";
$db_result=mysqli_query($connection,$db);
if(!$db_result)
{
	echo "error in creatin database".mysqli_error($connection);
}
*/

/*if(!mysqli_select_db($connection,"register"))
{
	echo "error in selection";
}


$sql_table="CREATE TABLE reg(

ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
USERNAME VARCHAR(75) NOT NULL UNIQUE,
MAILID VARCHAR(100) NOT NULL UNIQUE,
PASSWORD VARCHAR(100) NOT NULL
)";


$table_create=mysqli_query($connection,$sql_table);
if(!$table_create)
{
	echo "table is not created".mysqli_error($connection);
}
*/
?>