<?php

require_once 'data.php';
require_once '../helpers.php';


$lists = $glossaries['midterm'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Glossaries</title>
</head>
<body>
<ul>
    <?php foreach ($lists as $list_name => $list_data): ?>
        <li>
            <input type="checkbox"/><?= $list_name ?>
        </li>
    <?php endforeach; ?>
</ul>
<button>Submit</button>
</body>
</html>
