<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Chapter16_2 implements GlossaryList {

    public function getName()
    {
        return 'Chapter 16, text 2';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('到时候', 'At that time, then'),
            new Glossary('照相', 'To take a photograph, take a picture'),
            new Glossary('照片', 'A photograph, picture'),
            new Glossary('有意思', 'Interesting'),
            new Glossary('一定', 'Surely, certainly'),
            new Glossary('亲戚', 'Relative'),
            new Glossary('麻烦', 'Troublesome, inconvenient'),
            new Glossary('给', 'To give'),
            new Glossary('简单', 'Simple, uncomplicated'),
            new Glossary('办法', 'Method, means, way'),
        ];
    }

    public function getIdentifier()
    {
        return 'chapter16-2';
    }
}