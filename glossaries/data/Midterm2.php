<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Midterm2 implements GlossaryList {

    public function getName()
    {
        return 'Midterm - 12课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('兴趣', 'Interest'),
            new Glossary('感兴趣', 'To be interested in'),
            new Glossary('可是', 'But, yet, however'),
            new Glossary('一样', 'Same, identical'),
            new Glossary('还是', 'Or'),
            new Glossary('运动', 'Sports, athletics, exercise'),
            new Glossary('身体', 'Body, health'),
            new Glossary('爱好', 'Hobby'),
            new Glossary('最', 'Most, least, best, to the highest or lowest degree'),
            new Glossary('没错儿', 'Right, exactly'),
        ];
    }

    public function getIdentifier()
    {
        return 'midterm-chapter-12';
    }
}