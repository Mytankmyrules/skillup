<?php 

$name='Yura';
echo 'Test $name string<br>';
echo 'Test', $name, 'string<br>';
echo 'Test' . $name . 'string<br>';
echo "Test $name string<br>";
echo('Test<br><br>');

print 'Test $name string<br>';
print "Test $name string<br>";
print('Test<br><br>');

$val=print 'Test $name string<br>';
var_dump($val);

$v4 = false xor true;
var_dump($v4);