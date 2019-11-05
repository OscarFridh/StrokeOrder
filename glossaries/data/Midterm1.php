<?php

// TODO: Sort out import paths
require_once 'GlossaryList.php';

class Midterm1 implements GlossaryList {

    public function getName()
    {
        return 'Midterm - 11课';
    }

    public function createGlossaries()
    {
        return [
            new Glossary('同屋', 'Roommate'),
            new Glossary('公司', 'Company, corporation'),
            new Glossary('工作', 'Work'),
            new Glossary('上班', 'Go to work, be on duty'),
            new Glossary('周末', 'Weekend'),
            new Glossary('平时', 'Ordinary times, normal times'),
            new Glossary('学校', 'School, educational institution'),
            new Glossary('聊天儿', 'Chat'),
            new Glossary('喜欢', 'Like, love, be fond of'),
            new Glossary('一般', 'General, ordinary, usual'),
            new Glossary('东西', 'Thing, stuff'),
            new Glossary('一块儿', 'Together, in company'),
            new Glossary('收拾', 'Put in order, tidy up, clear away'),
            new Glossary('房间', 'Room'),
        ];
    }

    public function getIdentifier()
    {
        return 'midterm-chapter-11';
    }
}