<html>
<head><title>This is my first webpage</title></head>
<body bgcolor = "ADD8E6">

<p>This HTML will get delivered as is</p>

<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>"; 
	$j = 2;
	$k = 4;
	$username = "Marc";
	$add = 6+9;
	$count = 14;
	$pi = "3.14";
	$radius = "5";
	echo $username;
	echo "<br>";
	echo $count;
	echo "<br>";
	echo "6+9 =" .$add;
	echo "<br>";
	echo "My name is " .$username;
	echo "<br>";
	echo $pi*($radius*$radius);
	echo "<br>";
	echo $j;
	echo "<br>";
	echo $k;
	echo "<br>";
	if ($j === $k)
	{
		echo "Identical in terms of data type";
	}
	else{
		echo "They are not identical";
	}
//This is the snippet for php code
?>

</body>
</html>