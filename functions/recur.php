<?php
$x = -11;
function recur($x)
{
    echo $x.PHP_EOL;
    if ($x < 10) {
        recur(++$x);
    }
}

//recur(0);
//
$asd = 123;
$anon = function ($a) use ($asd, $x) {
    return $asd.$x.$a;
};
echo $anon(1);

$array = [
    1,
    2,
    3
];

$newArray = array_map(function ($item) {
    return $item * 10;
}, $array);


if ($x > 1) {
    function calcX($x)
    {
        return $x * 1000;
    }
} else {
    function calcX($x)
    {
        return $x / 1000;
    }
}
echo calcX($x);
