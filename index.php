<?php

require_once 'helpers.php';

$input_text = $_GET['text'];
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
    <a href="https://github.com/OscarFridh/StrokeOrder">View on GitHub</a>
    <form>
        <textarea name="text" id="input" cols="30" rows="10" placeholder="Enter a text in chinese characters"><?= $input_text ?></textarea>
        <button>Submit</button>
    </form>
    <div id="text-container">
        <?php foreach ($characters as $index => $character): ?>
            <div class="character-container">
                <?php /*
             * Set an id so that the elements can be uniquely referenced by the java script below.
             * One of these elements will be removed later on.
             * */ ?>
                <div class="hanzi-character" id="character-target-div-<?= $index ?>"></div>
                <p class="raw-text" id="character-paragraph-<?= $index ?>"><?= $character ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>
<script>

    function hanziWriterElementWithId(id) {
        return document.getElementById('character-target-div-' + id);
    }

    function characterParagraphWithId(id) {
        return document.getElementById('character-paragraph-' + id);
    }

    // Returns true if a given unicode character does not represent a chinese character
    function notChinese(character) {
        // https://stackoverflow.com/questions/11206443/how-can-i-check-if-variable-contains-chinese-japanese-characters
        return !character.match(/[\u3400-\u9FBF]/)
    }

    let text;
    text = <?php
    // Properly pass data from PHP to Javascript using json encoding.
    // https://stackoverflow.com/questions/168214/pass-a-php-string-to-a-javascript-variable-and-escape-newlines
    echo json_encode($input_text);
    ?>;

    for (let i = 0; i < text.length; i++) {

        const character = text.charAt(i);

        // A reference to the element used by hanzi-writer to render chinese characters
        const hanziWriterElement = hanziWriterElementWithId(i);

        // Avoid unnecessary network calls
        if (notChinese(character)) {
            hanziWriterElement.remove();
            continue;
        }


        // Create and configure the object responsible for rendering this chinese character
        const writer = HanziWriter.create(hanziWriterElement.id, character, {
            width: 200,
            height: 200,
            padding: 5,
            strokeAnimationSpeed: 1,
            delayBetweenStrokes: 200, // ms,
            onLoadCharDataSuccess() {

                // Display the hanziWriterElement only
                characterParagraphWithId(i).remove();

                // Add animations
                hanziWriterElement.addEventListener('click', function () {
                    writer.animateCharacter();
                });
            },
            onLoadCharDataError() {

                // Display the paragraph only
                hanziWriterElement.remove();
            }
        });
    }
</script>
</body>
</html>

