<?php

$groupedFiles = getGroupedFiles(__DIR__);

function getGroupedFiles($rout): array
{
    $elements = [];

    $dirs = getDirs($rout);
    foreach ($dirs as $dir) {
        $files = getFiles("{$rout}/{$dir}");
        $elements[$dir] = $files;
    }

    return $elements;
}

function getFiles(string $rout): array
{
    $files = scandir($rout);
    return array_filter(
        $files,
        static fn ($file): bool => !in_array($file, ['.', '..'])
    );
}

function getDirs(string $rout): array
{
    $dirs = scandir($rout);
    return array_filter($dirs, static function ($item) use ($rout): bool {
        $isDir = is_dir("{$rout}/{$item}");
        if (!$isDir) {
            return false;
        }

        preg_match('/^l\d{2}/', $item, $matches);
        return count($matches) === 1;
    });
}

function renderFilesHTML(array $groupedFiles): string
{
    $html = '<ul>';
    foreach ($groupedFiles as $dir => $files){
        
        echo $dir;
    }
    foreach ($files as $file){
        echo $dir . "/" . $file;
    }
    $html .= '</ul>';
    return $html;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <?= renderFilesHTML($groupedFiles) ?>
    </ul>
</body>
</html> 