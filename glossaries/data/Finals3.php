<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Finals3 implements GlossaryList {

    public function getName()
    {
        return 'Finals - 18课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('最少', 'At least'),
            new Glossary('小时', 'Hour'),
            new Glossary('不常', 'Not often'),
            new Glossary('另外', 'In addition, moreover'),
            new Glossary('一直', 'Continuously, always'),
            new Glossary('急急忙忙', 'Hurriedly, in a rush'),
            new Glossary('为什么', 'Why'),
        ];
    }

    public function getIdentifier()
    {
        return 'finals-chapter-18';
    }
}