<?php 

include "database.php" ;

?>


<!DOCTYPE html>
<head>
<style>

</style>
</head>
<body>
<?php

$name=$_POST['u_name'];
$pass=$_POST['pass_name'];
global $result;
if($name!="")
{
	if($pass!="")
	{
		
		$sql_statement= "SELECT * FROM reg WHERE USERNAME='$name' AND PASSWORD='$pass'"  ;
		$res1=mysqli_query($connection,$sql_statement);
		if(!$res1)
		{
			
			echo mysqli_error($connection);
		}
		else{
			$result=mysqli_fetch_array($res1);
		}
		
		if($result)
		{
			echo "Hey!!Welcome Back ". $name;
		}
		else{
			echo "YOU ARE Not THE VALID USER";
		}
		
		
	
	}
	else
	{
		echo "Enter correct password";
	}
}
else{
	echo "Enter correct username";
}









?>

</body>
</html>