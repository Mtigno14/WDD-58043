<html>
<head><title>My Looping Statements</title></head>

<?php

//Application 1

for($x=0; $x<=11; $x++)
{
	if($x==11)
	{
		break;
	}
echo "Hello $x". "<br>";
}

echo "<br>";

//Application 2

for($x=1;$x<10; $x++)
{
	if($x<3)
	{
		continue;
	}
echo "$x". "<br>";
}

?>

</html>