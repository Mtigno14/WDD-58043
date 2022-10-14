<html>
<head>
<title>My First Web Page</title>
<body align = center>
<h1>
<?php
//Equality and Inequality
//$a = "1000";
//$b = "+1000";
$a = 2;
$b = 3;
$month = "December";

//if($a==$b) echo "a is equal to b";
echo "<br>";
if($month=="December") echo "It is Christmas time!";
echo "<br>";
if($a>$b) echo "a is greater than b";
if($a<$b) echo "a is less than b";
echo "<br>";
if($a>=$b) echo "a is greater than or equal to b";
if($a<=$b) echo "a is less than or equal to b";

$c = 1;
$d = 0;
echo($c and $d). "<br>";
if ($c or $d);
{	
	echo"One of the operands or both operands are TRUE". "<br>";
}	
echo($c xor $d). "<br>";

$bank_balance = 120;
$savings = 100;
if($bank_balance<100)
{
	$money = 1000;
	$bank_balance+=$money; //The same as bank_balance + money
	echo "<br>";
	echo "The bank balance is: " .$bank_balance; 
}

else
{
	$savings += 50;
	$bank_balance -= 50; //The same as bank_balance  = bank_balance-50
	echo "The savings is: ".$savings;
	echo "<br>";
	echo "The bank balance is: ". $bank_balance;
}

echo "<br>";

$page = "Web Page";
switch($page)
{
	case "Home";
	{
		echo "You choose Home";
		break;
	}
	case "Login";
	{
		echo "You choose Login";
		break;
	}
	case "Links";
	{
		echo "You choose Links";
		break;
	}
	default:
	{
		echo "None of the choices is correct";
	}
}
echo "<br>";

$fuel = 2;
echo $fuel <= 1? "Fill tank now": "There's enough fuel";

?>
</h1>

</body>
</head>
</html>