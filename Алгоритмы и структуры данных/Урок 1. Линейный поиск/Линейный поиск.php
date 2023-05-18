$nums = range(1, 10000);

function linear_search($arr, $item) {
	foreach ($arr as $key => $value) {
		if ($value == $item) {
			return $key;
		};
	}
	return false;
}

$start = microtime(true);

// var_dump(linear_search($nums, 5000)); // 0.025955
var_dump(array_search(1000000,$nums)); // 0.002433

$time = round(microtime(true) - $start, 6);
echo "<p><b>Time:</b> $time</p>";