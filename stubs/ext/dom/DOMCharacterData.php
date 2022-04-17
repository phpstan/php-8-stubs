<?php 

class DOMCharacterData extends \DOMNode implements \DOMChildNode
{
    /** @return bool */
    #[\Until('8.1')]
    public function appendData(string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function appendData(string $data) : bool
    {
    }
    /** @return string|false */
    public function substringData(int $offset, int $count)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function insertData(int $offset, string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function insertData(int $offset, string $data) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function deleteData(int $offset, int $count)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function deleteData(int $offset, int $count) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function replaceData(int $offset, int $count, string $data)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function replaceData(int $offset, int $count, string $data) : bool
    {
    }
    /** @param DOMNode|string $nodes */
    public function replaceWith(...$nodes) : void
    {
    }
    public function remove() : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function before(...$nodes) : void
    {
    }
    /** @param DOMNode|string $nodes */
    public function after(...$nodes) : void
    {
    }
}