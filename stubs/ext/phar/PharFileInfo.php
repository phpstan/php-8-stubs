<?php 

class PharFileInfo extends \SplFileInfo
{
    public function __construct(string $filename)
    {
    }
    public function __destruct()
    {
    }
    /** @tentative-return-type */
    public function chmod(int $perms)
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
    // TODO make return type void
    /** @tentative-return-type */
    public function getCompressedSize()
    {
    }
    /** @tentative-return-type */
    public function getCRC32()
    {
    }
    /** @tentative-return-type */
    public function getContent()
    {
    }
    /** @tentative-return-type */
    public function getMetadata(array $unserializeOptions = [])
    {
    }
    /** @tentative-return-type */
    public function getPharFlags()
    {
    }
    /** @tentative-return-type */
    public function hasMetadata()
    {
    }
    /** @tentative-return-type */
    public function isCompressed(?int $compression = null)
    {
    }
    /** @tentative-return-type */
    public function isCRCChecked()
    {
    }
    /** @tentative-return-type */
    public function setMetadata(mixed $metadata)
    {
    }
}