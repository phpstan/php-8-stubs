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
    public function chmod(int $perms)
    {
    }
    /** @return bool */
    public function compress(int $compression_type)
    {
    }
    /** @return bool */
    public function decompress()
    {
    }
    /** @return bool */
    public function delMetadata()
    {
    }
    /** @return int */
    public function getCompressedSize()
    {
    }
    /** @return int */
    public function getCRC32()
    {
    }
    /** @return string */
    public function getContent()
    {
    }
    /** @return mixed */
    public function getMetadata(array $unserialize_options = [])
    {
    }
    /** @return int */
    public function getPharFlags()
    {
    }
    /** @return bool */
    public function hasMetadata()
    {
    }
    /** @return bool */
    public function isCompressed(int $compression_type = 9021976)
    {
    }
    /** @return bool */
    public function isCRCChecked()
    {
    }
    /** @return void */
    public function setMetadata(mixed $metadata)
    {
    }
}