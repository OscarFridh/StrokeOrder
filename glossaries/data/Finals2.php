<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Finals2 implements GlossaryList {

    public function getName()
    {
        return 'Finals - 17课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('做客', 'Ba a guest'),
            new Glossary('热闹', 'Bustling with excitement, lively'),
            new Glossary('最近', 'Recently, lately'),
            new Glossary('进步', 'Progress, advance, improve (both verb and noun)'),
            new Glossary('努力', 'Hard-working'),
            new Glossary('总是', 'Always'),
            new Glossary('怎么办', 'What to do'),
            new Glossary('着急', 'Worried, anxious'),
            new Glossary('更', 'More, even more'),
        ];
    }

    public function getIdentifier()
    {
        return 'finals-chapter-17';
    }
}