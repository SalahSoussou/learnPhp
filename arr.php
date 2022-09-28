<?php

/*
= Array
---------------

*/
echo '<pre>';
print_r([
    'hello',
    'A' => 'salah',
    'B' => 'sou',
    'iddin',
    "arr" => [12, "ER", "En", 7 => 'test'],
]);
echo '<pre>';

//==========================================
/*
Variables 
= Naming Rouls ++
*/

$userName = 'salah iddine';

echo $userName;
echo '<br>';
echo 'Hello $userName';
echo '<br>';
echo "Hello $userName";
echo '<hr>';

//=============

$a = 'var';
$$a = 'var: 2';
echo $a;
echo '<br>';
echo $$a;
echo '<br>';
echo $var;
echo '<br>';
