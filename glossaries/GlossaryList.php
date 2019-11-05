<?php


interface GlossaryList
{
    /**
     * @return An array of Glossary objects
     */
    function createGlossaries();

    /**
     * @return string, A name for this list of glossaries
     */
    function getName();

    /**
     * @return mixed, A value that can uniquely identify this list and be present in the URL
     */
    function getIdentifier();

}