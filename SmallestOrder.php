<?php 
// CASE :
// B: [5408, 6604, 32158, 84984, 8774, 34871]
// Write a function that returns the N-th smallest number from array B

function smallestOrder($n)
{
    $data = [5408, 6604, 32158, 84984, 8774, 34871];
    sort($data);
    return $data[$n-1];
}
$n = 2;
echo "The lowest number ".$n." is ";
echo smallestOrder($n);
