<?php

require_once 'helpers.php';

$input_text = $_GET['text'];
if(!$input_text) {
    die('No text to display.');
}

$characters = str_split_unicode($input_text);

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
    <?php foreach($characters as $index => $character): ?>
    <div id="character-container-<?= $index ?>">
        <?php
        /*
         * Set an id for each character-target-div so that they can be uniquely referenced by the java script below.
         * Also allow for special characters that cannot be rendered by hanzi-writers.
         * One of these elements will be removed depending on weather the character is supported by hanzi-writer or not.
         * */
        ?>
        <div class="hanzi-character" id="character-target-div-<?= $index ?>"></div>
        <p class="raw-text"><?= $character ?></p>
    </div>
    <?php endforeach ?>
</div>
<script>

    <?php /* Passing data from PHP to Javascript */ ?>
    var text = "<?= $input_text ?>";

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
                /**
                 * TODO:
                 * Avoid 404 error from hanzi-writer-data API call.
                 * Maybe possible to check if exists before request?
                 * Maybe possible to load the characters in advance and avoid loading dublicates.
                 */
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

