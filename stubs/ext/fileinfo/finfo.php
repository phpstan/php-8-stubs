<?php 

/** @generate-class-entries */
/** @not-serializable */
class finfo
{
    /** @alias finfo_open */
    public function __construct(int $flags = FILEINFO_NONE, ?string $magic_database = null)
    {
    }
    /**
     * @param resource|null $context
     * @return string|false
     * @alias finfo_file
     */
    #[\Until('8.1')]
    public function file(string $filename, int $flags = FILEINFO_NONE, $context = null)
    {
    }
    /**
     * @param resource|null $context
     * @tentative-return-type
     * @alias finfo_file
     */
    #[\Since('8.1')]
    public function file(string $filename, int $flags = FILEINFO_NONE, $context = null) : string|false
    {
    }
    /**
     * @param resource|null $context
     * @return string|false
     * @alias finfo_buffer
     */
    #[\Until('8.1')]
    public function buffer(string $string, int $flags = FILEINFO_NONE, $context = null)
    {
    }
    /**
     * @param resource|null $context
     * @tentative-return-type
     * @alias finfo_buffer
     */
    #[\Since('8.1')]
    public function buffer(string $string, int $flags = FILEINFO_NONE, $context = null) : string|false
    {
    }
    /**
     * @return bool
     * @alias finfo_set_flags
     */
    public function set_flags(int $flags)
    {
    }
}