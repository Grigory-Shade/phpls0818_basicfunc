<?php
$x = 10;

function moreAge(&$x) //&
{
    $x++;
    echo 'Внутри функции: '.$x.PHP_EOL;
//    return $x;
}
//$x = moreAge($x);
moreAge($x);
echo 'Снаружи функции: '.$x.PHP_EOL;

die();