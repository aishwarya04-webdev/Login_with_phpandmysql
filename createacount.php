<?php 

include "database.php" ;

?>
<!DOCTYPE html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
body{
	
	background-color:pink;
}
input{
	
	border-radius:5px;
}
form{
	
	margin-left:100px;
	margin-top:100px;
}
h2{
	margin-left:100px;
	margin-top:200px;
}
img{
	margin-top:100px;
	margin-left:200px;
}
</style>




</head>

<body>

<div class="row">

<div class="col col-sm-6">

<img src="https://www.designer.io/wp-content/uploads/2019/04/features-hero-1.jpg" alt="" width="500px" height="600px">

</div>




<div class="col col-sm-6">

<h2> Create a new account here!!</h2>

<form method="post" action="verifycorrectness.php">

Username<br>
<input type="text" placeholder="ENTER THE USERNAME" name="u_name">
<br><br>
Mail Id<br>
<input type="email" placeholder="ENTER YOUR MAIL ID" name="mail_name">
<br><br>
Password<br>
<input type="password" placeholder="ENTER YOUR PASSWORD" name="pass_name">
<br><br>

<input class="bg-secondary"type="submit" value="create account">
<br><br>
<a href="login.php"><input class="bg-success"type="button" value="Login"></a>
</form>

</div>



</div>



</body>











</html>



<?php 



?>