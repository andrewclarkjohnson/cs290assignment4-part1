<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// echo htmlspecialchars(print_r($_GET, true));
// echo(gettype($_GET["min-multiplier"]));
// echo(gettype($_GET["max-multiplier"]));
// echo(gettype($_GET["min-multiplicand"]));
// echo(gettype($_GET["max-multiplicand"]));
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Multiplication Table</title>
 </head>
 <body>

<?php
// check if something exists: isset
#check that the parameters were passed via GET

// $test = "t";
// echo(gettype($test));
// $test = (int) $test;

// echo ("<br>");
// echo(gettype($test));
// echo ("<br>".$test."<br>");

if(!isset($_GET["min-multiplicand"],$_GET["max-multiplicand"],
	$_GET["min-multiplier"],$_GET["max-multiplier"] ) )
	{
		if(!isset($_GET["min-multiplicand"])) { echo "The min_multiplicand was not set<br>";}
		if(!isset($_GET["max-multiplicand"])) { echo "The max_multiplicand was not set<br>";}
		if(!isset($_GET["min-multiplier"])) { echo "The min_multiplier was not set<br>";}
		if(!isset($_GET["min-multiplier"])) { echo "The min_multiplier was not set<br>";}
		// echo ("One or more of the 4 required parameters were not provided.");
	}
	#check that the parameters are integers
	else
	{
		$min_multiplicand = $_GET["min-multiplicand"];
		$max_multiplicand = $_GET["max-multiplicand"];
		$min_multiplier =  $_GET["min-multiplier"] ;
		// echo("**". $_GET["max-multiplier"]. "**");
		$max_multiplier =  $_GET["max-multiplier"] ;
		// echo("**". $max_multiplier. "**");
// echo (is_int($min_multiplicand));
// if(is_int($min_multiplicand)) {echo("integer<br>"); } else {echo("NOT integer<br>"); }
// if(is_int($max_multiplicand)) {echo("integer<br>"); } else {echo("NOT integer<br>"); }
// if(is_numeric($_GET["min-multiplier"])) {echo("integer<br>"); } else {echo("NOT integer<br>"); }
// if(is_numeric($_GET["max-multiplier"])) {echo("integer<br>"); } else {echo("NOT integer<br>"); }
// echo ("<br>");
// echo (is_int($max_multiplicand));
// echo ("<br>");
// echo (is_int($min_multiplier));
// echo ("<br>");
// echo (is_int($max_multiplier));
// echo ("<br>");
// 		echo(gettype($min_multiplicand));
// echo(gettype($max_multiplicand));
// echo(gettype($min_multiplicand));
// echo(gettype($max_multiplicand));
		if ((!is_numeric($min_multiplicand)) || (!is_numeric($max_multiplicand)) ||
			(!is_numeric($min_multiplier)) || (!is_numeric($max_multiplier)))
			{
				if (!is_numeric($min_multiplicand)) echo ("min-multipicand isn't an integer.<br>");
				if (!is_numeric($max_multiplicand)) echo ("max-multipicand isn't an integer.<br>");
				if (!is_numeric($min_multiplier)) echo ("min-multiplier isn't an integer.<br>");
				if (!is_numeric($max_multiplier)) echo ("max-multiplier isn't an integer.<br>");
			}
			#check that the min parameters are less than the max parameters
			elseif (($max_multiplier-$min_multiplier)<=0 || ($max_multiplicand-$min_multiplicand)<=0)
			{ 
				if(($max_multiplier-$min_multiplier)<=0) 
				{
					echo ("The min multipler is bigger than the max multiplier. <br>");
				}
				if(($max_multiplicand-$min_multiplicand)<=0) 
				{
					echo ("The min multipicand is bigger than the max multipicand. <br>");
				}
			}
			#print the table
			else
			{
				// echo ("Everything checks out so far.");
				?>
				<table>
					<tbody>
						<?php

						for ($i = ($min_multiplicand-1); $i <= $max_multiplicand; $i++)	
						{
							echo("<tr>");
								for ($j = ($min_multiplier-1); $j <= $max_multiplier; $j++)	
								{
									// header col
									if( ($i>($min_multiplicand-1)) && ($j==($min_multiplier-1)))
									{
										echo ("<td>".($i));
									}
									//header row
									elseif ( ($i==($min_multiplicand-1)) && ($j>($min_multiplier-1)))
									{
										echo ("<td>".($j));
									}
									elseif ( ($i==($min_multiplicand-1)) && ($j==($min_multiplier-1)))
									{
										echo ("<td>");
									}
									else 
									{
										// echo ("<td>".$j*$i);
										echo ("<td>".($i* $j));
									}
									//echo("<td>".$i);
								}

						}

						?>
					</tbody>
				</table>	
				<?php

			}


	}
		
		
	
?>

 </body>
</html>