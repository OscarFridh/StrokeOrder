<?php

$text = $_GET['text'];
if(!$text) {
    die('No text to display.');
}


// Define a function for splitting a string into unicode characters
// as the native function str_split does not support unicode.
// https://www.php.net/manual/en/function.str-split.php
function str_split_unicode($str, $l = 0) {
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

$characters = str_split_unicode($text);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stroke Order</title>
    <script src="https://cdn.jsdelivr.net/npm/hanzi-writer@2.0.2/dist/hanzi-writer.min.js"></script>

    <style>
        #container {
            display: flex;
            flex-wrap: wrap;
        }

        .raw-text {
            font-size: 82px;
        }

    </style>
</head>
<body>
<div id="container">
    <?php
    // Set an id for each character so that they can be uniquely referenced by the java script below.
    foreach($characters as $index => $character): ?>
    <div id="character-container-<?= $index ?>">
        <?php /* Also allow for special characters that cannot be rendered by hanzi-writers. Only one of the elements should be displayed. */ ?>
        <div class="hanzi-character" id="character-target-div-<?= $index ?>"></div>
        <p class="raw-text"><?= $character ?></p>
    </div>
    <?php endforeach ?>
</div>
<script>

    // Passing the data from PHP to Javascript
    var text = "<?= $text ?>";

    for (var i = 0; i < text.length; i++) {

        let characterContainerID = 'character-container-'+i;
        let character = text.charAt(i);


        let writer = HanziWriter.create('character-target-div-' + i, character, {
            width: 200,
            height: 200,
            padding: 5,
            strokeAnimationSpeed: 1,
            delayBetweenStrokes: 200, // ms,
            onLoadCharDataSuccess() {
                let characterContainer = document.getElementById(characterContainerID);
                let paragraphElement = characterContainer.getElementsByClassName('raw-text')[0];
                paragraphElement.remove();
                // TODO: Avoid 404 error from hanzi-writer-data API call. Maybe possible to check if exists before request?
            },
            onLoadCharDataError() {
                let characterContainer = document.getElementById(characterContainerID);
                let hanziWriterElement = characterContainer.getElementsByClassName('hanzi-character')[0];
                hanziWriterElement.remove();
            }
        });

        let characterContainer = document.getElementById(characterContainerID);
        let hanziWriterElement = characterContainer.getElementsByClassName('hanzi-character')[0];
        hanziWriterElement.addEventListener('click', function() {
            writer.animateCharacter();
        });
    }
</script>

</body>
</html>

