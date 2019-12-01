<?php

require_once 'Glossary.php';

require_once 'Chapter3_1.php';

require_once 'Chapter16_1.php';
require_once 'Chapter16_2.php';

require_once 'Midterm1.php';
require_once 'Midterm2.php';
require_once 'Midterm3.php';
require_once 'Midterm4.php';
require_once 'Midterm5.php';

require_once 'Finals1.php';
require_once 'Finals2.php';
require_once 'Finals3.php';
require_once 'Finals4.php';
require_once 'Finals5.php';

function createGlossaryLists() {
    return [

        // Bortkommenterade tills vidare medans jag pluggar till tentan.

//        new Chapter3_1(),
//
//        new Chapter16_1(),
//        new Chapter16_2(),
//
//        new Midterm1(),
//        new Midterm2(),
//        new Midterm3(),
//        new Midterm4(),
//        new Midterm5(),

        new Finals1(),
        new Finals2(),
        new Finals3(),
        new Finals4(),
        new Finals5(),

    ];
}