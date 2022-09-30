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
/*
Pre-Defined Variables

*/

echo '<pre>';
#print_r($_SERVER);
echo $_SERVER['HTTP_HOST'];
echo '<br>';
echo $_POST['user'];
echo '<pre>';
?>

<form action="" method="post">
    <input type="text" name="user" id="12">
    <input type="submit" value="send" id="33">
</form>


<?php
//============================================
/*
Constants

 ----------------
 - const always uppercase
 */

define("DATA_NAME", 'salah');
define("NUMBER", 5);

echo '<br>';
echo DATA_NAME;
echo '<br>';
echo NUMBER * 10;

//============================================
/*
Pre-Defined Variables =>  Constants

 ----------------
 - const always uppercase
 */

echo '<hr>';
echo php_uname("s");
echo '<br>';
echo php_uname("n");
echo '<br>';
echo php_uname("r");
echo '<br>';
echo php_uname("v");
echo '<br>';
echo php_uname("m");
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo __FILE__;
