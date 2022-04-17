<?php 

class IntlRuleBasedBreakIterator extends \IntlBreakIterator
{
    public function __construct(string $rules, bool $compiled = false)
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getBinaryRules()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getBinaryRules() : string|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getRules()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getRules() : string|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getRuleStatus()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getRuleStatus() : int
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function getRuleStatusVec()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getRuleStatusVec() : array|false
    {
    }
}