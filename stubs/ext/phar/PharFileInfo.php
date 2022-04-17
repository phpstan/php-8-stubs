<?php 

class PharFileInfo extends \SplFileInfo
{
    public function __construct(string $filename)
    {
    }
    public function __destruct()
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function chmod(int $perms)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function chmod(int $perms) : void
    {
    }
    /** @return bool */
    public function compress(int $compression)
    {
    }
    // TODO make return type void
    /** @return bool */
    public function decompress()
    {
    }
    // TODO make return type void
    /** @return bool */
    public function delMetadata()
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getCompressedSize()
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCompressedSize() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getCRC32()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCRC32() : int
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getContent()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getContent() : string
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getMetadata(array $unserializeOptions = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMetadata(array $unserializeOptions = []) : mixed
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getPharFlags()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPharFlags() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasMetadata()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasMetadata() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isCompressed(?int $compression = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isCompressed(?int $compression = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isCRCChecked()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isCRCChecked() : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setMetadata(mixed $metadata)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMetadata(mixed $metadata) : void
    {
    }
}