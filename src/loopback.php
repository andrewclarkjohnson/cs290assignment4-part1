<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// var_dump($_GET);
// var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	if (!empty($_POST))
	{
		echo ("Something passed via POST<br>");
		$passed_parameters = $_POST;
		// if(empty($passed_parameters)
		foreach ($passed_parameters as $key => $value) {
			if( is_null($passed_parameters[$key]) || (empty($passed_parameters[$key]))  || $passed_parameters[$key]=="" )
				{ 
					$passed_parameters[$key]='undefined';
				}
	}
	
		
		// $json_parameters = array($type);
	
	}
	else 
	{
		$passed_parameters=null);

	}
	$json_parameters = array("type"=>"POST","parameters"=>$passed_parameters);
	echo (json_encode($json_parameters));
	
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	if (!empty($_GET))
	{
		echo ("Something passed via GET<br>");
		$passed_parameters = $_GET;
		// if(empty($passed_parameters)
		foreach ($passed_parameters as $key => $value) {
			if( is_null($passed_parameters[$key]) || (empty($passed_parameters[$key]))  || $passed_parameters[$key]=="" )
				{ 
					$passed_parameters[$key]='undefined';
				}
	}
	
		
		// $json_parameters = array($type);
	
	}
	else 
	{
		$passed_parameters=null;

	}
	$json_parameters = array("type"=>"GET","parameters"=>$passed_parameters);
	echo (json_encode($json_parameters));
	
}
// if(!empty($_POST)) { echo "Post variables."; }
// if(!empty($_GET)) { echo "GET variables."; }
// echo htmlspecialchars(print_r($_REQUEST, true));
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Multiplication Table</title>
 </head>
 <body>
</body>
</html>