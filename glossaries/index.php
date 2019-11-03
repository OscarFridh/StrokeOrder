<?php

require_once 'data.php';

$lists = createMidTermGlossaryLists();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Glossaries</title>
</head>
<body>
<form action="generate-list.php">
    <ul>
        <?php foreach ($lists as $list_name => $list_data): ?>
            <li>
                <input name="<?= $list_name ?>" type="checkbox"/><?= $list_name ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <button>Submit</button>
</form>
</body>
</html>
