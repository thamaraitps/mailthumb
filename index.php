<?php 
// PHP program to find the fist 
// character that is repeated 

function findRepeatFirstN2($s) 
{ 
	// this is O(N^2) method 
	$p = -1; 
	for ($i = 0; $i < strlen($s); $i++) 
	{ 
		for ($j = ($i + 1); 
			$j < strlen($s); $j++) 
		{ 
			if ($s[$i] == $s[$j]) 
			{ 
				$p = $i; 
				break; 
			} 
		} 
		if ($p != -1) 
			break; 
	} 

	return $p; 
} 

// Driver code 
$str = "testsol"; 
$pos = findRepeatFirstN2($str); 

if ($pos == -1) 
	echo ("Not found Letter"); 
else
	echo ($str[$pos]); 

// This code is contributed by jit_t 
?> 
