<?php
$operands = array(1, 2, 3, 4, 5);
$operator = " + ";
if (rand(0,1) == 1){
$operator = " - ";
}
$result = $operands[array_rand($operands)] . $operator . $operands[array_rand($operands)];
echo $result;
?>