<?php

require_once 'data.php';
require_once '../helpers.php';


$list = array();
$lists = createMidTermGlossaries();
foreach($_GET as $list_name => $state) {
    foreach ($lists[$list_name] as $index => $data) {
        array_push($list, $data);
    }
}

shuffle($list);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glossaries</title>
</head>
<body>
<ol>
    <?php foreach ($list as $index => $item): ?>
        <li>
            <a href="<?= '../?text=' . urlencode($item['chinese']); ?>"><?= $item['english'] ?></a>
        </li>
    <?php endforeach; ?>
</ol>
</body>
</html>

