<?php

require_once 'Glossary.php';

function createMidTermGlossaryLists() {
    return [
        'chapter11-1' => [
            new Glossary('roomate', '同屋'),
            new Glossary('Company, corporation', '公司'),
        ],
        'chapter11-2' => [
            new Glossary('Go to work, be on duty', '上班'),
            new Glossary('Weekend', '周末'),
        ],
        'chapter11-3' => [
            new Glossary('Ordinary times, normal times', '平时'),
            new Glossary('School, educational institution', '学校'),
            new Glossary('Chat', '聊天儿'),
        ]
    ];
}