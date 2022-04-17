<?php 

class DOMText extends \DOMCharacterData
{
    public function __construct(string $data = "")
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isWhitespaceInElementContent()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isWhitespaceInElementContent() : bool
    {
    }
    /**
     * @return bool
     * @alias DOMText::isWhitespaceInElementContent
     */
    #[\Until('8.1')]
    public function isElementContentWhitespace()
    {
    }
    /**
     * @tentative-return-type
     * @alias DOMText::isWhitespaceInElementContent
     */
    #[\Since('8.1')]
    public function isElementContentWhitespace() : bool
    {
    }
    /** @return DOMText|false */
    public function splitText(int $offset)
    {
    }
}