<html>
<head><title>My Web Page</title></head>
<body>

<?php

	$content = "Welcome to PHP Programming";
	$a = 5;
	$_msg = "Hello, again";
	$x = 8;
	$y = 2;

	echo $content;
	echo"<br>".$a;
	echo "<br>";
	echo $_msg;

	//Arithmetic operations

	echo"<br>";
	echo$x+$y;
	echo"<br>";
	echo$x-$y;
	echo"<br>";
	echo$x*$y;
	echo"<br>";
	echo$x/$y;
	echo"<br>".$x%$y;
	echo"<br>";
	echo $x**$y;

	//Comparison operations

	echo"<br>";
	if($x===$y)
	{
		echo "They are identical";
	}
	else
	{
		echo "They are not identical";
	}
	echo"<br>";

	//Increment/decrement operators
	//for loop

	/*for($a=5;$a>1; $a--)
	{
		echo "<br>".$a;
	}
	echo"<br>";*/

	//while loop

	/*while($a>=1)
	{
		echo "The number is: $a \n";
		echo"<br>";
		$a-=1;	//$a=$a-1
	}
	*/

	//do while loop

	$x = 1;

	do 
	{
  		echo "The number is: $x <br>";
  		$x++;
	} 
	while ($x <= 5);

?>

</body>
</html>