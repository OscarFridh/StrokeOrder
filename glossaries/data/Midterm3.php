<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Midterm3 implements GlossaryList {

    public function getName()
    {
        return 'Midterm - 13课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('方便', 'Convenient'),
            new Glossary('贵', 'Expensive'),
            new Glossary('每', 'Every, each'),
            new Glossary('最后', 'Final, last'),
            new Glossary('又', 'Again'),
            new Glossary('满意', 'Be satisfied, be pleased'),
            new Glossary('已经', 'Already'),
            new Glossary('不错', 'Not bad, pretty good'),
            new Glossary('离', 'From, away from'),
            new Glossary('远', 'Far, faraway'),
            new Glossary('走路', 'Walk'),
            new Glossary('行', 'Be all right, will do'),
            new Glossary('没有', 'Not yet'),
            new Glossary('昨天', 'Yesterday'),
            new Glossary('请客', 'Treat sb. (to a dinner, performance, etc.), entertain guests'),
            new Glossary('怎么', 'Used to inquire about nature, condition, cause, etc.'),
            new Glossary('来', 'Come'),
            new Glossary('玩儿', 'Play, have fun'),
        ];
    }

    public function getIdentifier()
    {
        return 'midterm-chapter-13';
    }
}