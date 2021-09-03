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

echo <<<'EOD'
Пример текста,
занимающего несколько строк,
с помощью синтаксиса nowdoc. Обратные слеши всегда обрабатываются буквально,
например, \\ и \'.
EOD;

$string = 'string';
echo "$string[-2]" . "<br>";

print '<br>';
print '<br>';

// HEREDOC
$sql = <<<SQL
    SELECT *
    FROM users
    WHERE name = '$name'
SQL;
echo $sql, '<br>';

$html = <<<HTML
<div class="test"><span>QQQQQ</span></div>
HTML;
var_dump($html);

$t = <<<QWERTY
test message
with many lines
QWERTY;
echo $t;
echo '<br>';

// NOWDOC
$sql2 = <<<'SQL'
    SELECT *
    FROM users
    WHERE name = '$name'
SQL;
echo $sql2, '<br><br>';

$js = <<<JS
document.addEventListener('click', () => { alert(1) });
JS;
echo $js;