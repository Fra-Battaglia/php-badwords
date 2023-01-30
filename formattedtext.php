<?php
	$text = $_POST['text'];
	$hidden_text = $_POST['hidden-text'];
	$formatted_text = str_replace($hidden_text, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP Badwords</title>
	</head>
	<body>
		<div>
			<h2><?php echo strlen($text) ?></h2>
			<p><?php echo $text; ?></p>
		</div>
		
		<div>
			<h2><?php echo strlen($formatted_text) ?></h2>
			<p><?php echo $formatted_text; ?></p>
		</div>
	</body>
</html>