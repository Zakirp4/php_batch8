<?php
	$units = 275;
	$bill = 0.0;
	
	if ($units <= 50) {
	    $bill = $units * 3.50;
	} elseif ($units <= 100) {
	    $bill = (50 * 3.50) + (($units - 50) * 4.00);
	} elseif ($units <= 200) {
	    $bill = (50 * 3.50) + (50 * 4.00) + (($units - 100) * 5.20);
	} else {
	    $bill = (50 * 3.50) + (50 * 4.00) + (100 * 5.20) + (($units - 200) * 6.50);
	}
	
	echo "For $units units, the Total electricity bill is: " . number_format($bill, 2);
	?>