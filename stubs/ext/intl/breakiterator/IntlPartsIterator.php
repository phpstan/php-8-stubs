<?php 

class IntlPartsIterator extends \IntlIterator
{
    /** @tentative-return-type */
    #[\Since('8.1')]
    #[\Until('8.2')]
    public function getRuleStatus(): int
    {
    }
    /** @tentative-return-type */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public function getRuleStatus(): int
    {
    }
    /** @tentative-return-type */
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function getRuleStatus(): int
    {
    }
    /**
     * @var int
     * @cvalue PARTS_ITERATOR_KEY_SEQUENTIAL
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const KEY_SEQUENTIAL = UNKNOWN;
    /**
     * @var int
     * @cvalue PARTS_ITERATOR_KEY_LEFT
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const KEY_LEFT = UNKNOWN;
    /**
     * @var int
     * @cvalue PARTS_ITERATOR_KEY_RIGHT
     */
    #[\Since('8.2')]
    #[\Until('8.4')]
    public const KEY_RIGHT = UNKNOWN;
    /**
     * @tentative-return-type
     * @return IntlBreakIterator
     */
    public function getBreakIterator()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getRuleStatus(): int
    {
    }
    /** @tentative-return-type */
    #[\Since('8.5')]
    public function getRuleStatus(): int
    {
    }
    /** @cvalue PARTS_ITERATOR_KEY_SEQUENTIAL */
    #[\Since('8.4')]
    public const int KEY_SEQUENTIAL = UNKNOWN;
    /** @cvalue PARTS_ITERATOR_KEY_LEFT */
    #[\Since('8.4')]
    public const int KEY_LEFT = UNKNOWN;
    /** @cvalue PARTS_ITERATOR_KEY_RIGHT */
    #[\Since('8.4')]
    public const int KEY_RIGHT = UNKNOWN;
}