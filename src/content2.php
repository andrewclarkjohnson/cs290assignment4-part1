<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Content #2</title>
 </head>
 <body>

<?php


		if(isset($_SESSION["times_visited"]))
		{
			
			echo ("Here is content page #2. I hope you can contain your excitement. <br>") ;
			echo ("You've been to the content 1 page". $_SESSION["times_visited"]. " times.<br>") ;
			echo ("Click <a href=\"content1.php\">here</a> to see Content #1.<br>");
		}
		else
		{
			header("Location: http://localhost:8888/assignment4-part1/src/content1.php",true);
			exit();
		}


?>

</body>
</html>