<?php

function debug($data) {
	echo '<pre>'.print_r($data, 1).'</pre>';
}

$arr = [15, 5, 1, 4, 3];

// debug($arr);

function quick_sort($arr) {
	
	if (count($arr) < 2) {
		return $arr;
	}

	$pivot = $arr[0];
	$left_arr = $right_arr = [];

	for ($i = 1; $i < count($arr); $i++) {
		if ($arr[$i] <= $pivot) {
			$left_arr[] = $arr[$i];
		}
		if ($arr[$i] > $pivot) {
			$right_arr[] = $arr[$i];
		}
	}
	
	$left_arr = quick_sort($left_arr);
	$right_arr = quick_sort($right_arr);

	return array_merge($left_arr, [$pivot], $right_arr);
}

// debug(quick_sort($arr));

$nums = range(1, 10000);
shuffle($nums);

$start = microtime(true);

sort($nums); // 0.001577
//quick_sort($nums); // 0.015314

$time = round(microtime(true) - $start, 6);
echo "<p><b>Time:</b> $time</p>";

?>