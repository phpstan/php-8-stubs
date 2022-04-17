<?php 

class RegexIterator extends \FilterIterator
{
    public function __construct(Iterator $iterator, string $pattern, int $mode = RegexIterator::MATCH, int $flags = 0, int $pregFlags = 0)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function accept()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function accept() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getMode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMode() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setMode(int $mode)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMode(int $mode) : void
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getFlags()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFlags() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setFlags(int $flags)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setFlags(int $flags) : void
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getRegex()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getRegex() : string
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getPregFlags()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPregFlags() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setPregFlags(int $pregFlags)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setPregFlags(int $pregFlags) : void
    {
    }
}