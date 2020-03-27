<?php  
/*Basic Understanding -
** FIFO
** One end is always used to insert data (enqueue) and the other is used to remove data (dequeue)
** 'array_unshift'(insert at the beginning of an array) and 'array_pop'(remove from the end of an array), works same as Queue.
** Peek - get first data element without removing it || empty - check if queue is empty
** for Fixed size queue - First check the size using - count()
** Insertion - O(1)
** Deletion - O(1) (If implemented with array, then deletion will take O(n) for shifting elements to rearrange the Queue)
** Access - O(n)
** Search - O(n)
**/
echo "<pre>";

$queue = array();
echo empty($queue) ? "queue is empty": "queue is NOT empty"; //ternary operator
echo "\nqueue Initialize->\n";print_r($queue);

$valfirst = 'one';
array_unshift($queue, $valfirst);
$peek = end($queue);
echo "\n\nFirst Value->\nPeek-".$peek."\n";print_r($queue);

$valsecond = 'two';
array_unshift($queue, $valsecond);
$peek = end($queue);
echo "\n\nSecond Value->\nPeek-".$peek."\n";print_r($queue);

$valthird = 'three';
$valfourth = 'four';
array_unshift($queue, $valthird);
array_unshift($queue, $valfourth);
$peek = end($queue);
echo "\n\nAll Values->\nPeek-".$peek."\n";print_r($queue);

echo "\n\nAfter pop operation on Queue -> (FIFO)\n";
array_pop($queue);
print_r($queue);
?>