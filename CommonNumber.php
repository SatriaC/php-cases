<?php 
// CASE :
// A: [68168, 87954, 32158, 8774]
// B: [5408, 6604, 32158, 84984, 8774, 34871]
// Write a function that returns an array of common numbers from array A & array B

function commonNumber()
{
    $a = [68168, 87954, 32158, 8774];
    $b = [5408, 6604, 32158, 84984, 8774, 34871];
    $result = array();
    foreach ($a as $strA) {
        $charsA = preg_split('//', $strA, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($charsA as $valueA) {
            foreach ($b as $strB) {
                $charsB = preg_split('//', $strB, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($charsB as $valueB) {
                    if ($valueA == $valueB) {
                        array_push($result, $valueA);
                    }
                }
            }
        }
    }

    return array_unique($result);
}

print_r(commonNumber());
?>