<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Midterm5 implements GlossaryList {

    public function getName()
    {
        return 'Midterm - 15课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('打工', 'Have a temporary job'),
            new Glossary('挣钱', 'Earn money, make money'),
            new Glossary('告诉', 'Tell, let know'),
            new Glossary('要', 'Want, wish'),
            new Glossary('会', 'Be acquainted width, have knowledge of'),
            new Glossary('合适', 'Proper suitable'),
            new Glossary('可以', 'Can, may'),
            new Glossary('互相', 'Each other, mutually'),
            new Glossary('能', 'Can, be able to'),
            new Glossary('大学', 'College, university'),
            new Glossary('或者', 'Or'),
            new Glossary('帮忙', 'Help, do a favour, give (lend) a hand'),
            new Glossary('放假', 'To have a holiday or vacation'),
            new Glossary('旅游', 'To travel, to tour'),
            new Glossary('假期', 'Vacation, holliday'),
            new Glossary('回', 'Return, go back'),
            new Glossary('开车', 'To drive a vehicle, automobile (car)'),
            new Glossary('陪', 'Keep sb. company, to accompany'),
            new Glossary('帮', 'To help'),
            new Glossary('比较', 'Comparatively, relatively'),
            new Glossary('感谢', 'Thank, be grateful'),
        ];
    }

    public function getIdentifier()
    {
        return 'midterm-chapter-15';
    }
}