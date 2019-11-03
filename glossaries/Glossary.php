<?php


class Glossary
{

    private $english;
    private $chinese;

    /**
     * @return string
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * @return string
     */
    public function getChinese()
    {
        return $this->chinese;
    }

    public function __construct($english, $chinese)
    {
        $this->english = $english;
        $this->chinese = $chinese;
    }

}