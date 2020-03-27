<?php  
/*Basic Understanding -
** LIFO
** Push and Pop
** 'array_push'(insert at the end of an array) and 'array_pop'(remove from the end of an array), works same as Stack.
** Peek - get top data element without removing it || empty - check if stack is empty
** for Fixed size stack - First check the size using - count()
** Insertion - O(1)
** Deletion - O(1)
** Access - O(n)
** Search - O(n)
**/
echo "<pre>";

$stack = array();
echo empty($stack) ? "Stack is empty": "Stack is NOT empty"; //ternary operator
echo "\nStack Initialize->\n";print_r($stack);

$valfirst = 'one';
array_push($stack, $valfirst);
$peek = end($stack);
echo "\n\nFirst Value->\nPeek-".$peek."\n";print_r($stack);

$valsecond = 'two';
array_push($stack, $valsecond);
$peek = end($stack);
echo "\n\nSecond Value->\nPeek-".$peek."\n";print_r($stack);

$valthird = 'three';
$valfourth = 'four';
array_push($stack, $valthird);
array_push($stack, $valfourth);
$peek = end($stack);
echo "\n\nAll Values->\nPeek-".$peek."\n";print_r($stack);

echo "\n\nAfter pop operation on Stack -> (LIFO)\n";
array_pop($stack);
print_r($stack);

?>