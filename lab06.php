<?php

$stuff = array("Hi", "There");
echo $stuff[1];
echo "<pre>";

$stuff1 = array("name" => "Agnes",
                "course" => "Web Applications Programming");
echo $stuff1["course"];
echo "<pre>";

print_r($stuff);
echo "<pre>";
var_dump($stuff);
echo "<pre>";

for($i = 0; $i < count($stuff); $i++){
  echo "I = ", $i, " Value = ", $stuff[$i], "\n";
}
echo "<pre>";

$fruits = array("banana", "apple", "pineapple", "mango");
for ($i = 0; $i < count($fruits); $i++){
  echo "Fruit code = ", $i, " Value = ", $fruits[$i], "\n";
}
echo "<pre>";

echo strrev(" .dlrow olleH");
echo "\n";
echo str_repeat("Hip ", 2);
echo "\n";
echo strtoupper("hooray!");
echo "\n";
echo strlen("intro");
echo "\n";
echo strlen("Agnes Jee Chian Hwa");
echo "<pre>";

function greet(){
  print "Hello\n";
}
greet();
greet();
echo "<pre>";

function numbers(){
for ($i = 0; $i < 10; $i++){
  echo "I = ", $i, "\n";
}
}
numbers();
echo "<pre>";
numbers();
echo "<pre>";

function greeting(){
  return "Hello";
}
print greeting() . " Glenn\n";
print greeting() . " Sally\n";

$hello = greeting();
echo $hello;
echo "<pre>";

function howdy($lang = 'es'){
  if($lang == 'es') return "Hola";
  if($lang == 'fr') return "Bonjour";
  if($lang == 'cn') return "Ni hao";
  return "Hello";
}
print howdy('es') . " Glenn\n";
print howdy('fr') . " Sally\n";
print howdy() . " Agnes\n";
echo "<pre>";

function double($alias){
  $alias = $alias * 2;
  return $alias;
}
$val = 10;
$dval = double($val);
echo "Value = $val Doubled = $dval\n";
echo "<pre>";

function triple(&$realthing){
  $realthing = $realthing * 3;
  return $realthing;
}
$val = 10;
$tval = triple($val);
echo "Value = $val\n";
echo "Triple value = $tval\n";
echo "<pre>";

function tryzap(){
  $val = 100;
}
$val = 10;
tryzap();
echo "TryZap = $val\n";

function dozap(){
  global $val;
  $val = 100;
}
$val = 10;
dozap();
echo "DoZap = $val\n";


 ?>


<h1>Contents of the $_GET array</h1>
<p>Using print_r:</p>
<pre>
  <?php
    print_r($_GET);
   ?>
</pre>
<p>Using var_dump:</p>
<pre>
  <?php
    var_dump($_GET);
   ?>
</pre>
