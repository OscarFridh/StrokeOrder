<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Chapter3_1 implements GlossaryList {

    public function getName()
    {
        return 'Chapter 3, text 1';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('请问', 'Excuse me, may I ask'),
            new Glossary('请', 'Please'),
            new Glossary('问', 'To ask'),
            new Glossary('叫', 'To call / name'),
            new Glossary('什么', 'What'),
            new Glossary('名字', 'Name (given or personal)'),
            new Glossary('姓', 'To be surnamed'),
            new Glossary('认识', 'To know, to recognize'),
            new Glossary('很', 'Very, very much'),
            new Glossary('高兴', 'Glad, happy'),
            new Glossary('也', 'Also, too, as well'),
        ];
    }

    public function getIdentifier()
    {
        return 'chapter3-1';
    }
}