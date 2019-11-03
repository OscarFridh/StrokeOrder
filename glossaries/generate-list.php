<?php

require_once 'data.php';
require_once '../helpers.php';


$list = array();
$lists = createMidTermGlossaries();
foreach($_GET as $list_name => $state) {
    foreach ($lists[$list_name] as $index => $data) {
        $list[$data['english']] = $data['chinese'];
    }
}

shuffle_assoc($list);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glossaries</title>
</head>
<body>
<ol>
    <?php foreach ($list as $english => $character): ?>
        <li>
            <a href="<?= '../?text=' . urlencode($character); ?>"><?= $english ?></a>
        </li>
    <?php endforeach; ?>
</ol>
</body>
</html>

