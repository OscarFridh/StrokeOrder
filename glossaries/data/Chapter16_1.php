<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Chapter16_1 implements GlossaryList {

    public function getName()
    {
        return 'Chapter 16, text 1';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('结婚', 'To marry, get married'),
            new Glossary('送', 'give, offer'),
            new Glossary('份', 'set, copy (measure word)'),
            new Glossary('少', 'few, little'),
            new Glossary('应该', 'should, ought to'),
            new Glossary('希望', 'hope, wish'),
            new Glossary('参加', 'take part in, attend'),
            new Glossary('婚礼', 'wedding ceremony, wedding'),
            new Glossary('重要', 'important'),
            new Glossary('事情', 'thing, affair, matter'),
            new Glossary('特殊', 'special, particular'),
        ];
    }

    public function getIdentifier()
    {
        return 'chapter16-1';
    }
}