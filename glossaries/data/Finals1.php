<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Finals1 implements GlossaryList {

    public function getName()
    {
        return 'Finals - 16课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('应该', 'Should, ought to'),
            new Glossary('希望', 'Hope, wish'),
            new Glossary('参加', 'Take part in, attend'),
            new Glossary('重要', 'Important'),
            new Glossary('事情', 'Thing, affair, matter'),
            new Glossary('特殊', 'Special, particular'),
            new Glossary('到时候', 'At that time, then'),
            new Glossary('有意思', 'Interesting'),
            new Glossary('一定', 'Surely, certainly'),
            new Glossary('麻烦', 'Troublesome, inconvenient'),
            new Glossary('简单', 'Simple, uncomplicated'),
            new Glossary('办法', 'Method, means, way'),
            new Glossary('好吃', 'Tasty, delicious'),
            new Glossary('当然', 'Certainly, of course'),
        ];
    }

    public function getIdentifier()
    {
        return 'finals-chapter-16';
    }
}