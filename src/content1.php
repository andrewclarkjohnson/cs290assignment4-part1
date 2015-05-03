<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Content #1</title>
 </head>
 <body>

<?php

function display_content1() {
	
	echo ("This is the main content for this page. <br>Click <a href=\"content2.php\">here</a> to see Content #2.<br>");
}

if ( (!empty($_POST)) || (isset($_SESSION['times_visited'])))
{
	if (!empty($_POST))
	{
		$passed=$_POST;
		// var_dump($passed);
		if($passed["username"] == "" || $passed["username"] == "null")
		{
			echo ("A username must be passed. Click <a href=\"login.php\">here</a> to return to the login screen. ");
		}
		else
		{
			if (!isset($_SESSION['times_visited'])) 
			{
				$_SESSION['times_visited'] = 0;
			} 
		}

	}
	if (isset($_SESSION['times_visited']))
	{
		$_SESSION['times_visited']++;
		echo ("Hello ".$passed["username"]." you have visited this page ". $_SESSION['times_visited']) ;
				if($_SESSION['times_visited']==1)
					{echo (" time"); }
				else
					{echo (" times"); }	
				echo (" before. Click <a href=\"login.php?new_session=1\">here</a> to logout.<br><br>");
		display_content1();
	}
					

}
else
{
	header("Location: http://localhost:8888/assignment4-part1/src/login.php",true);
	exit();
}

?>

</body>
</html>