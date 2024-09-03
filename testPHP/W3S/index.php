<!DOCTYPE html>
<html>
<body>
 
<?php
echo 'My first PHP script!';
echo '</br>';
echo phpversion();
echo '</br>';
$txt = 'PHP';
echo "I love $txt!";
echo '</br>';
echo 'I love ' . $txt . '!';
$x = 5;
$y = 4;
echo '</br>';
echo $x + $y;
echo '</br>';
var_dump($x);
echo '</br>';

var_dump('John');
echo '</br>';
var_dump(3.14);
echo '</br>';
var_dump(true);
echo '</br>';
var_dump([2, 3, 56]);
echo '</br>';
var_dump(null);
echo '</br>';

/* Všechny tři proměnné získají hodnotu "Ovoce": */
$q = $w = $e = 'Ovoce';

echo '</br>';
function myTest() {
    $xx = 5; // local scope
echo"<p>Variable x inside function is: $xx</p>;
}
myTest();

echo '</br>';
echo"<p>Variable x outside is: $x</p>";

?>

</body>
</html>