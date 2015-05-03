<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
if(!empty($_GET))
{
	if($_GET["new_session"] == "1" )
	{
		$_SESSION=array();
		session_destroy();
		//die();
	}
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Log In</title>
 </head>
 <body>

<form action="content1.php" id="content1" method="POST">
	<!-- GET will put parameters in URL --> 
    Username:  <input type="text" name="username" /><br />
    
    <input type="submit" name="login" value="Login" />
</form>


</body>
</html>