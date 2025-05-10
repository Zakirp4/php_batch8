<?php

$number = -5;

echo "The number $number is" . positiveNegative($number) . " and" . oddEven($number); ;

function positiveNegative($n) {
    if($n > 0)
        return " positive";
    else
        return " negative";
  }


  function oddEven($n) {
    if($n % 2 == 0)
        return " even";
    else
        return " odd";
  }

?>