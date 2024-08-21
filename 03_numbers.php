<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations
echo $a + $b. '<br />';
echo $a - $b. '<br />';
echo $a * $b. '<br />';
echo $a / $b. '<br />';
echo $a % $b. '<br />';
// Assignment with math operators
echo '<hr />';
$a = $a + $b;
$a += $b;
echo $a;
echo '<hr />';
$a = $a - $b;
$a -= $b;
echo $a;
echo '<hr />';
// Increment operator
$a++;
echo ++$a;
echo '<br/>';

// Decrement operator
$a--;
echo $a;
echo '<br/>';
echo --$a;
echo '<hr />';
// Number checking functions
var_dump(is_float(3.5));
var_dump(is_int(4));
var_dump(is_numeric("3.5"));
var_dump(is_numeric("35e0")); // expponental
echo '<hr />';
// Conversion
$strNumber = "3.45";
echo (float)$strNumber.'<br/>';
echo (int)$strNumber;
echo '<hr/>';
// Number functions
echo abs(-15);
echo '<hr/>';
echo pow(2, 4);
echo '<hr/>';
echo sqrt(16);
echo '<hr/>';
echo max(2, 5, 7, 6);
echo '<hr/>';
echo min(2, 5, 7, 6);
echo '<hr/>';
echo round(2.5); // 3
echo round(2.3); // 2
echo '<hr/>';
echo floor(2.9);
echo '<hr/>';
echo ceil(2.1);
echo '<hr/>';
// Formatting numbers
$myNumber = 1234567890.12345;
echo number_format($myNumber, '2', '.', ',');
// https://www.php.net/manual/en/ref.math.php

?>