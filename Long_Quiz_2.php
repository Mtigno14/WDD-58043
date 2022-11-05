<html>
<body>

<h2> Problem 1. Create a PHP program that will perform the following mathematical operations, to produce the required output. </h2>

<?php

$Salary_rate = 600;
$Salary = 0;
$Taxable_Amount = 0;
$Net_Pay = 0;

$Salary = $Salary_rate * 15;
$Taxable_amount = .30 * $Salary;
$Net_pay = $Salary - $Taxable_amount;

echo "Salary Rate: $Salary_rate <br>";
echo "Salary: $Salary <br>";
echo "Taxable Amount: $Taxable_amount <br>";
echo "Net Pay: $Net_pay";

?>

<h2> Problem 2. Create a PHP program that will add all positive integers from 1-50 using loop statement. </h2>

<?php

$x = 1;
$y = 50;
$sum = 0;

while($x <= $y)
{
$sum += $x;
$x++;
}

echo "Sum of positive integers: $sum";

?>

</body>
</html>
