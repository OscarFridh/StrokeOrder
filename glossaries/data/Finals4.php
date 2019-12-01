<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Finals4 implements GlossaryList {

    public function getName()
    {
        return 'Finals - 19课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('后来', 'Later, afterwards'),
            new Glossary('只好', 'Have to, have no choice but'),
            new Glossary('看见', 'Catch sight of, see'),
            new Glossary('抱歉', 'Sorry, apologetic'),
            new Glossary('保证', 'Pledge, guarantee'),
            new Glossary('以前', 'Before'),
            new Glossary('认为', 'Think, consider'),
            new Glossary('容易', 'Easy'),
        ];
    }

    public function getIdentifier()
    {
        return 'finals-chapter-19';
    }
}