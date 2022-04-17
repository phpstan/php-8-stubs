<?php 

#endif
class SplFileObject extends \SplFileInfo implements \RecursiveIterator, \SeekableIterator
{
    /** @param resource|null $context */
    public function __construct(string $filename, string $mode = "r", bool $useIncludePath = false, $context = null)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function eof()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function eof() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function valid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function valid() : bool
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function fgets()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fgets() : string
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function fread(int $length)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fread(int $length) : string|false
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function fgetcsv(string $separator = ",", string $enclosure = "\"", string $escape = "\\")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fgetcsv(string $separator = ",", string $enclosure = "\"", string $escape = "\\") : array|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fputcsv(array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n") : int|false
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setCsvControl(string $separator = ",", string $enclosure = "\"", string $escape = "\\")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setCsvControl(string $separator = ",", string $enclosure = "\"", string $escape = "\\") : void
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getCsvControl()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCsvControl() : array
    {
    }
    /**
     * @param int $wouldBlock
     * @return bool
     */
    #[\Until('8.1')]
    public function flock(int $operation, &$wouldBlock = null)
    {
    }
    /**
     * @param int $wouldBlock
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function flock(int $operation, &$wouldBlock = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function fflush()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fflush() : bool
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function ftell()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function ftell() : int|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function fseek(int $offset, int $whence = SEEK_SET)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fseek(int $offset, int $whence = SEEK_SET) : int
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function fgetc()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fgetc() : string|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function fpassthru()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fpassthru() : int
    {
    }
    /** @return array|int|null */
    #[\Until('8.1')]
    public function fscanf(string $format, mixed &...$vars)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fscanf(string $format, mixed &...$vars) : array|int|null
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function fwrite(string $data, int $length = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fwrite(string $data, int $length = 0) : int|false
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function fstat()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fstat() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function ftruncate(int $size)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function ftruncate(int $size) : bool
    {
    }
    /** @return string|array|false */
    #[\Until('8.1')]
    public function current()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function current() : string|array|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function key()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function key() : int
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function next()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function next() : void
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
    public function setMaxLineLen(int $maxLength)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMaxLineLen(int $maxLength) : void
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getMaxLineLen()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMaxLineLen() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasChildren() : bool
    {
    }
    /** @return RecursiveIterator|null */
    #[\Until('8.1')]
    public function getChildren()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getChildren() : ?RecursiveIterator
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function seek(int $line)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function seek(int $line) : void
    {
    }
    /**
     * @return string
     * @alias SplFileObject::fgets
     */
    #[\Until('8.1')]
    public function getCurrentLine()
    {
    }
    /**
     * @tentative-return-type
     * @alias SplFileObject::fgets
     */
    #[\Since('8.1')]
    public function getCurrentLine() : string
    {
    }
    /** @implementation-alias SplFileObject::fgets */
    public function __toString() : string
    {
    }
}