<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Midterm4 implements GlossaryList {

    public function getName()
    {
        return 'Midterm - 14课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('今年', 'This year'),
            new Glossary('特别', 'Especially, particularly'),
            new Glossary('看病', 'See a doctor, consult a doctor'),
            new Glossary('这么', 'So, such'),
            new Glossary('生病', 'Fall ill, be ill, be sick'),
            new Glossary('天气', 'Weather'),
            new Glossary('但是', 'But, however'),
            new Glossary('有空儿', 'Have time off, be free'),
        ];
    }

    public function getIdentifier()
    {
        return 'midterm-chapter-14';
    }
}