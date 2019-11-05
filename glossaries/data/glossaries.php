<?php

require_once 'Glossary.php';
require_once 'Midterm1.php';
require_once 'Midterm2.php';
require_once 'Midterm3.php';
require_once 'Midterm4.php';
require_once 'Midterm5.php';

function createGlossaryLists() {
    return [
        new Midterm1(),
        new Midterm2(),
        new Midterm3(),
        new Midterm4(),
        new Midterm5()
    ];
}