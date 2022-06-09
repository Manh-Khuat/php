<?php
$bien_1 = 1;
// echo $bien_1;
var_dump($bien_1);

define('__HANGSO__', 1);

var_dump(__HANGSO__);

$x = 1;
$y = '1';
var_dump($x == $y);
var_dump($x === $y);

$z = 'B';
var_dump($x != $z);
var_dump($x !== $z);

$a = ($x > 5) ? $x : 0;

var_dump($a);
$b = 'Test';
$b = $b ?? 'Gia tri dau tien';
var_dump($b);
?>
