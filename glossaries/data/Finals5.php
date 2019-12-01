<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Finals5 implements GlossaryList {

    public function getName()
    {
        return 'Finals - 20课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('经常', 'Often, frequently'),
            new Glossary('有名', 'Well-known, famous'),
            new Glossary('舒服', 'Comfortable'),
            new Glossary('别的', 'Other, else'),
            new Glossary('比赛', 'Match, contest, race'),
            new Glossary('主意', 'Idea, plan'),
        ];
    }

    public function getIdentifier()
    {
        return 'finals-chapter-20';
    }
}