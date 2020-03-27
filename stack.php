<?php  
/*Basic Understanding -
** LIFO
** Push and Pop
** 'array_push'(insert at the end of an array) and 'array_pop'(remove from the end of an array), works same as Stack.
** Peek - get top data element without removing it || empty - check if stack is empty
** Insertion - O(1)
** Deletion - O(1)
** Access - O(n)
** Search - O(n)
**/

$stack = array();
echo empty($stack) ? "Stack is empty": "Stack is NOT empty";
echo "<pre>"."Stack Initialize->\n";print_r($stack);

$valfirst = 'one';
array_push($stack, $valfirst);
$peek = end($stack);
echo "\n\n<pre>"."First Value->\nPeek-".$peek."\n";print_r($stack);

$valsecond = 'two';
array_push($stack, $valsecond);
$peek = end($stack);
echo "\n\n<pre>"."Second Value->\nPeek-".$peek."\n";print_r($stack);

$valthird = 'three';
$valfourth = 'four';
array_push($stack, $valthird);
array_push($stack, $valfourth);
$peek = end($stack);
echo "\n\n<pre>"."All Values->\nPeek-".$peek."\n";print_r($stack);

?>