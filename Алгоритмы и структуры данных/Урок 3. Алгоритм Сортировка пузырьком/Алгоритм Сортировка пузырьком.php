<?php

function debug($data) {
	echo '<pre>'.print_r($data, 1).'</pre>';
}

// $arr = [15, 5, 1, 4, 3];
// $arr = [1, 3, 4, 5, 15];

// debug($arr);

// Пузырьковая сортировка
function buble_sort($arr) {

	for ($i = 0; $i < count($arr) - 1; $i++) {
		$flag = false;
		// echo '<p>Внешний цикл</p>';

		for ($j = 0; $j < count($arr) - 1 - $i; $j++) {

			// echo '<p>===Внутренний цикл</p>';

			if ($arr[$j] > $arr[$j + 1]) {

				list($arr[$j], $arr[$j + 1]) = [$arr[$j + 1],$arr[$j]];
				$flag = true;

			}
		}

		if (!$flag) {
			return $arr;
		}
	}
	
	return $arr;
}

$nums = range(1, 1000);
shuffle($nums);
// debug(buble_sort($arr));


$start = microtime(true);

// debug(buble_sort($arr));
// sort($nums); // 0.000112
buble_sort($nums); // 0.075661

$time = round(microtime(true) - $start, 6);
echo "<p><b>Time:</b> $time</p>";


/*------------------------------------------------*/
// Как поменять местами значения
$a = 5;
$b = 20;

// Способ №1

// $tmp = $a;
// $a = $b;
// $b = $tmp;
// var_dump($a,$b);

// Способ №2
list($a, $b) = [$b, $a];
// var_dump($a, $b);

// Способ №3
$a = $a + $b - ($b = $a);
// var_dump($a, $b);


?>