<?php


class Glossary
{

    private $chinese;
    private $translation;

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
    public function getTranslation()
    {
        return $this->translation;
    }

    public function __construct($chinese, $translation)
    {
        $this->chinese = $chinese;
        $this->translation = $translation;
    }

}