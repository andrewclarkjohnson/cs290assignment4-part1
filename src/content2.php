<?php
session_start();



		if(isset($_SESSION["times_visited"]))
		{
			?>
			<!DOCTYPE html>
			<html>
			 <head>
			 	<meta charset="UTF-8">
			  <title>Content #2</title>
			 </head>
			 <body>

			<?php
			echo ("Here is content page #2. It's beauty is in it's simplicity. I hope you can contain your excitement. <br>") ;
			echo ("You've been to the content #1 page ". $_SESSION["times_visited"]. " times.<br>") ;
			echo ("Click <a href=\"content1.php\">here</a> to see Content #1.<br>");
		}
		else
		{
			header("Location: https://web.engr.oregonstate.edu/~johnsan3/CS290/ass4/login.php",true);
			exit();
		}


?>

</body>
</html>