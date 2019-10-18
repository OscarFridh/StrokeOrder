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

    const text = '<?= $input_text ?>';

    for (let i = 0; i < text.length; i++) {

        const character = text.charAt(i);

        // Sometimes the hanzi writer API successfully loads an unsupported characters (blank render)
        if (character === '?') {
            hanziWriterElement.remove();
            continue;
        }

        // A reference to the element used by hanzi-writer to render chinese characters
        const hanziWriterElement = hanziWriterElementWithId(i);


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

                /**
                 * TODO:
                 * Avoid 404 error from hanzi-writer-data API call.
                 * Maybe possible to check if exists before request?
                 * Maybe possible to load the characters in advance and avoid loading duplicates.
                 */

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

