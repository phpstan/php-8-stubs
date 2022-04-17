<?php 

class IntlCodePointBreakIterator extends \IntlBreakIterator
{
    /** @return int */
    #[\Until('8.1')]
    public function getLastCodePoint()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getLastCodePoint() : int
    {
    }
}