<?php


class Glossary
{

    private $chinese;
    private $english;

    /**
     * @return string
     */
    public function getChinese()
    {
        return $this->chinese;
    }

    /**
     * @return string
     */
    public function getEnglish()
    {
        return $this->english;
    }

    public function __construct($chinese, $english)
    {
        $this->chinese = $chinese;
        $this->english = $english;
    }

}