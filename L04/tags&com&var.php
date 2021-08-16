<?php

//comments bellow

/*your
comments
here
*/

$test=123;
echo $test;

$test='abc';
var_dump($test);

$clientBalance=1000;
var_dump($clientBalance);
$clientBalance=$clientBalance-200;
var_dump($clientBalance);

$client_birth_month=5; //snake case - устаревшее
$clientBirthMonth=5; //camel case - актуалочка

echo '<br>';

$clientBalanceBackup=$clientBalance;
$clientBalance-=500;
var_dump($clientBalance, $clientBalanceBackup);

echo '<br>';

$clientBalanceBackup=&$clientBalance;
$clientBalance-=500;
$clientBalanceBackup+=200;
var_dump($clientBalance, $clientBalanceBackup);

echo '<br>';

$t='q';
$$t=123;
var_dump($q);

