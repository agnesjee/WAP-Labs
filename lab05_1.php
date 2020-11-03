<?php

echo ("//Variable Names\n");
$abc = 12;
$total = 0;
$largest_so_far = 0;
echo ($abc);
echo ($total);
echo ($largest_so_far);
echo ("\n");

$abcd = 12;
$php2 = 0;
$bad_punc = 0;


echo ($abcd);
echo ("\n");
echo ($php2);
echo ("\n");
echo ($bad_punc);
echo ("\n\n");


echo ("//Variable Name in Expression\n");
$x = 2;
$y = $x + 5;
print $y;
echo ("\n\n\n");

echo ("//Understanding Double Quotes and Single Quotes\n\n");
header('Content-type: text/plain');
echo "this is a simple string\n";
echo "You can also have embedded newlines in
strings this way as it is
okay to do";
// Outputs: This will expand:
//          a newline
echo "\nThis will expand: \na newline";
// Outputs: Variables do 12
$expand = 12;
echo "\nVariables do $expand\n\n\n";


header('Content-type: text/plain');
echo 'this is a simple string ';
echo 'You can also have embedded newlines in
strings this way as it is
okay to do';
// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';
// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';
// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';

echo ("\n\n\n");

echo "//Adding Two Variables in an Expression\n";
$x = "15" + 27;
echo ($x);
echo ("\n\n\n");

echo "//Increment / Decrement Operator\n";
$x = 12;
$y = 15 + $x++;
echo "x is $x and y is $y \n\n";

$x = 12;
$y = 15 + $x;
$x = $x + 1;
echo "x is $x and y is $y \n\n\n";

echo "//String Concatenation\n";
$a = 'Hello ' . 'World! ' . 'Agnes Jee Chian Hwa';
echo $a."\n\n\n";

echo "//Ternary Operator\n";
$www = 123;
$msg = $www > 100 ? "Large" : "Small";
echo "First: $msg \n";
$msg = ($www % 2 == 0) ? "Even" : "Odd";
echo "Second: $msg \n";
$msg = ($www % 2) ? "Odd" : "Even";
echo "Third: $msg \n\n";

$value = 15;
$msg = "";
$msg = $value < 15 ? "value is smaller than 15" : "value is greater than 15";
echo "$msg \n\n\n";


echo "//Side-Effect Assignment";
echo "\n";
$out = "Hello";
$out = $out . " ";
$out .= "World!";
$out .= "\n";
echo $out;
$count = 0;
$count += 1;
echo "Count: $count\n\n\n";


echo "//Casting\n";
$a = 56; $b = 12;
$c = $a / $b;
echo "C: $c \n";
$d = "100" + 36.25 + TRUE;
echo "D: " . $d . "\n";
echo "D2: " . (string) $d . "\n";
$e = (int) 9.9 - 1;
echo "E: $e \n";
$f = "sam" + 25;
echo "F: $f \n";
$g = "sam" . 25;
echo "G: $g \n\n\n";


echo "//Equality\n";
$first = 10;
$second = 10.0;
$third = "10";

if ($first == 10) print "One\n";
if ($second == 10) print "Two\n";
if ($third == 10) print "Three\n";

if ($third === 10) print "Four\n";
if ($second === 10) print "Five\n";
if ($first === 10) print "Six\n";
echo "\n\n";


echo "//IF Statement\n";
$ans = 42;
if ($ans > 42){
  print "Hello World! \n";
}
else{
  print "Wrong answer. \n";
}

echo "\n\n";


echo "//Loops - For Statement\n";
for ($count = 10; $count <= 20; $count++){
  echo $count;
  echo "\n";
}

echo "\n\n";

echo "//Loops - While Statement\n";
$count = 10;
while ($count <= 20){
  echo $count;
  echo "\n";
  $count++;
}



?>
