<?php 

/** @generate-class-entries */
class IntlBreakIterator implements \IteratorAggregate
{
    /** @return IntlBreakIterator|null */
    #[\Until('8.1')]
    public static function createCharacterInstance(?string $locale = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createCharacterInstance(?string $locale = null) : ?IntlBreakIterator
    {
    }
    /** @return IntlCodePointBreakIterator */
    #[\Until('8.1')]
    public static function createCodePointInstance()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createCodePointInstance() : IntlCodePointBreakIterator
    {
    }
    /** @return IntlBreakIterator|null */
    #[\Until('8.1')]
    public static function createLineInstance(?string $locale = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createLineInstance(?string $locale = null) : ?IntlBreakIterator
    {
    }
    /** @return IntlBreakIterator|null */
    #[\Until('8.1')]
    public static function createSentenceInstance(?string $locale = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createSentenceInstance(?string $locale = null) : ?IntlBreakIterator
    {
    }
    /** @return IntlBreakIterator|null */
    #[\Until('8.1')]
    public static function createTitleInstance(?string $locale = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createTitleInstance(?string $locale = null) : ?IntlBreakIterator
    {
    }
    /** @return IntlBreakIterator|null */
    #[\Until('8.1')]
    public static function createWordInstance(?string $locale = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function createWordInstance(?string $locale = null) : ?IntlBreakIterator
    {
    }
    private function __construct()
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function first()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function first() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function following(int $offset)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function following(int $offset) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getErrorCode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getErrorCode() : int
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getErrorMessage()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getErrorMessage() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getLocale(int $type)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getLocale(int $type) : string|false
    {
    }
    /** @return IntlPartsIterator */
    #[\Until('8.1')]
    public function getPartsIterator(string $type = IntlPartsIterator::KEY_SEQUENTIAL)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPartsIterator(string $type = IntlPartsIterator::KEY_SEQUENTIAL) : IntlPartsIterator
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getText()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getText() : ?string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isBoundary(int $offset)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isBoundary(int $offset) : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function last()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function last() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function next(?int $offset = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next(?int $offset = null) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function preceding(int $offset)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function preceding(int $offset) : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function previous()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function previous() : int
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public function setText(string $text)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setText(string $text) : ?bool
    {
    }
    // TODO return false instead of null in case of failure
    public function getIterator() : Iterator
    {
    }
}