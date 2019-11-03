<?php

$glossaries = [
    'roomate' => '同屋',
    'Company, corporation' => '公司',
    'Go to work, be on duty' =>'上班',
    'Weekend' =>'周末',
    'Ordinary times, normal times' =>'平时',
    'School, educational institution' =>'学校',
    'Chat' => '聊天儿'
];

// https://www.php.net/manual/en/function.shuffle.php
function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    $array = $new;

    return true;
}

shuffle_assoc($glossaries);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glossaries</title>
</head>
<body>
<ol>
    <?php foreach ($glossaries as $english => $character): ?>
        <li>
            <a href="<?= '../?text=' . urlencode($character); ?>"><?= $english ?></a>
        </li>
    <?php endforeach; ?>
</ol>
</body>
</html>

