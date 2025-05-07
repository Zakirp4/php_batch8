<?php

$number = -4;

echo "The number -4 is" . positiveNegative($number) . " and" . oddEven($number); ;

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