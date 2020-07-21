

<?php 

include "database.php" ;

?>
<?php
$name=$_POST['u_name'];
$mail=$_POST['mail_name'];
$pass=$_POST['pass_name'];


$check_username="SELECT * FROM reg WHERE USERNAME='$name'";
$res1=mysqli_query($connection,$check_username);
if($res1)
{
	$res=mysqli_fetch_array($res1);
}



if($res>0)
{
	echo "The username is already exists!Give unique Username";
}



/* password validation using regex(regular expression)*/
$upper_case=preg_match('@[A-Z]@',$pass);
$lower_case=preg_match('@[a-z]@',$pass);
$digits=preg_match('@[0-9]@',$pass);

if(!$upper_case || !$lower_case || !$digits || strlen($pass)<8)
{
	echo "Your password is not strong enough and it should be atleast 8 characters";
	
}
else
{
 $sql_insert="INSERT INTO reg(USERNAME,MAILID,PASSWORD)VALUES('$name','$mail','$pass')";	
	
if(!mysqli_query($connection,$sql_insert))
{
	echo "error".mysqli_error($connection);
}	
	
 else{
	 echo ' Hey! congrats you have suucessfully created an account.Please login to our portal..
	 <br><br>
     <a href="login.php"><input class="bg-success"type="button" value="Login"></a> ';
 }	
	
	
}
?>