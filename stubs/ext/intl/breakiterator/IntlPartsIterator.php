<?php 

/** @generate-class-entries */
class IntlPartsIterator extends \IntlIterator
{
    /** @return IntlBreakIterator */
    #[\Until('8.1')]
    public function getBreakIterator()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getBreakIterator() : IntlBreakIterator
    {
    }
}