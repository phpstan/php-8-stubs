<?php 

#endif
class SplFileObject extends \SplFileInfo implements \RecursiveIterator, \SeekableIterator
{
    /** @param resource|null $context */
    public function __construct(string $filename, string $mode = "r", bool $useIncludePath = false, $context = null)
    {
    }
    /** @tentative-return-type */
    public function rewind()
    {
    }
    /** @tentative-return-type */
    public function eof()
    {
    }
    /** @tentative-return-type */
    public function valid()
    {
    }
    /** @tentative-return-type */
    public function fgets()
    {
    }
    /** @tentative-return-type */
    public function fread(int $length)
    {
    }
    /** @tentative-return-type */
    public function fgetcsv(string $separator = ",", string $enclosure = "\"", string $escape = "\\")
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n")
    {
    }
    /** @tentative-return-type */
    public function setCsvControl(string $separator = ",", string $enclosure = "\"", string $escape = "\\")
    {
    }
    /** @tentative-return-type */
    public function getCsvControl()
    {
    }
    /**
     * @param int $wouldBlock
     * @tentative-return-type
     */
    public function flock(int $operation, &$wouldBlock = null)
    {
    }
    /** @tentative-return-type */
    public function fflush()
    {
    }
    /** @tentative-return-type */
    public function ftell()
    {
    }
    /** @tentative-return-type */
    public function fseek(int $offset, int $whence = SEEK_SET)
    {
    }
    /** @tentative-return-type */
    public function fgetc()
    {
    }
    /** @tentative-return-type */
    public function fpassthru()
    {
    }
    /** @tentative-return-type */
    public function fscanf(string $format, mixed &...$vars)
    {
    }
    /** @tentative-return-type */
    public function fwrite(string $data, int $length = 0)
    {
    }
    /** @tentative-return-type */
    public function fstat()
    {
    }
    /** @tentative-return-type */
    public function ftruncate(int $size)
    {
    }
    /** @tentative-return-type */
    public function current()
    {
    }
    /** @tentative-return-type */
    public function key()
    {
    }
    /** @tentative-return-type */
    public function next()
    {
    }
    /** @tentative-return-type */
    public function setFlags(int $flags)
    {
    }
    /** @tentative-return-type */
    public function getFlags()
    {
    }
    /** @tentative-return-type */
    public function setMaxLineLen(int $maxLength)
    {
    }
    /** @tentative-return-type */
    public function getMaxLineLen()
    {
    }
    /** @tentative-return-type */
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    public function seek(int $line)
    {
    }
    /**
     * @tentative-return-type
     * @alias SplFileObject::fgets
     */
    public function getCurrentLine()
    {
    }
    /** @implementation-alias SplFileObject::fgets */
    public function __toString() : string
    {
    }
}