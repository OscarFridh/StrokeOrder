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
    <link rel="stylesheet" href="styling.css">
</head>
<body>
<div id="container">
    <?php foreach($characters as $index => $character): ?>
    <div class="character-container">
        <?php
        /*
         * Set an id so that the elements can be uniquely referenced by the java script below.
         * One of these elements will be deleted later on.
         * */
        ?>
        <div class="hanzi-character" id="character-target-div-<?= $index ?>"></div>
        <p class="raw-text" id="character-paragraph-<?= $index ?>"><?= $character ?></p>
    </div>
    <?php endforeach ?>
</div>
<script>

    const text = '<?= $input_text ?>';

    for (let i = 0; i < text.length; i++) {

        const character = text.charAt(i);
        const characterTargetDivId = 'character-target-div-'+i;
        const characterParagraphId = 'character-paragraph-'+i;

        const writer = HanziWriter.create('character-target-div-' + i, character, {
            width: 200,
            height: 200,
            padding: 5,
            strokeAnimationSpeed: 1,
            delayBetweenStrokes: 200, // ms,
            onLoadCharDataSuccess() {
                const paragraphElement = document.getElementById(characterParagraphId);
                paragraphElement.remove();
                /**
                 * TODO:
                 * Avoid 404 error from hanzi-writer-data API call.
                 * Maybe possible to check if exists before request?
                 * Maybe possible to load the characters in advance and avoid loading duplicates.
                 */
            },
            onLoadCharDataError() {
                const hanziWriterElement = document.getElementById(characterTargetDivId);
                hanziWriterElement.remove();
            }
        });

        const hanziWriterElement = document.getElementById(characterTargetDivId);
        hanziWriterElement.addEventListener('click', function() {
            writer.animateCharacter();
        });
    }
</script>
</body>
</html>

