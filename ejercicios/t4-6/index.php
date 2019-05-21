<head>
	<meta charset="utf-8"/> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
</head>
<body>
<h1><?echo "Tu IP: ", $_SERVER['HTTP_X_FORWARDED_FOR']?></h1>
<?
$IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
$IP = '151.214.1.1';
preg_match('/^150\.214\.[0-9]+\.[0-9]+$/', $IP, $matches, PREG_OFFSET_CAPTURE);
if ($matches[0][0] === $IP) {
	echo "<h2>Estás en la UGR!</h2>\n";
	echo "<img src=\"ugr.png\"/>\n";
}
else {
	echo "<h2>No estás en la UGR</h2>\n";
	echo "<img src=\"sad.svg\"/>\n";
}
?>
</body>
