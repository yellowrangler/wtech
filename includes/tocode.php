<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Show App Code</title>
</head>
<body>
<pre>
	
<?php
//
// Build grid parameters passed in url
//
$codepage = $_GET['codepage']; // get the requested code to display
if ($codepage != "")
{
	if (file_exists($codepage))
	{
		$fh = fopen("$codepage", 'rb');

		if ( $fh != false)
		{
			$contents = "";
			$results = "";
			
			while (!feof($fh)) {
			  	$results = fread($fh, 8192);
				$results = str_replace("<", "&lt;", $results);
				$results = str_replace(">", "&gt;", $results);
				$contents .= $results;
			}

			fclose($fh);	
		}
		else
		{
			$contents = "<center><h3>Error - Code file could not be opened $codepage.</h3></center>";
		}
		
	}
	else
	{
		$contents = "<center><h3>Error - Code name not valid $codepage</h3></center>";
	}
}
else
{
	$contents = "<center><h3>Error - Code name not passed in</h3></center>";
}

print $contents;	
?>
</pre>		  
</body>
</html>