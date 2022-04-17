<?php 

class OCILob
{
    /**
     * @alias oci_lob_save
     * @return bool
     */
    #[\Until('8.1')]
    public function save(string $data, int $offset = 0)
    {
    }
    /**
     * @alias oci_lob_save
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function save(string $data, int $offset = 0) : bool
    {
    }
    /**
     * @alias oci_lob_import
     * @return bool
     */
    #[\Until('8.1')]
    public function import(string $filename)
    {
    }
    /**
     * @alias oci_lob_import
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function import(string $filename) : bool
    {
    }
    /**
     * @alias oci_lob_import
     * @return bool
     */
    #[\Until('8.1')]
    public function saveFile(string $filename)
    {
    }
    /**
     * @alias oci_lob_import
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function saveFile(string $filename) : bool
    {
    }
    /**
     * @alias oci_lob_load
     * @return string|false
     */
    #[\Until('8.1')]
    public function load()
    {
    }
    /**
     * @alias oci_lob_load
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function load() : string|false
    {
    }
    /**
     * @alias oci_lob_read
     * @return string|false
     */
    #[\Until('8.1')]
    public function read(int $length)
    {
    }
    /**
     * @alias oci_lob_read
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function read(int $length) : string|false
    {
    }
    /**
     * @alias oci_lob_eof
     * @return bool
     */
    #[\Until('8.1')]
    public function eof()
    {
    }
    /**
     * @alias oci_lob_eof
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function eof() : bool
    {
    }
    /**
     * @alias oci_lob_tell
     * @return int|false
     */
    #[\Until('8.1')]
    public function tell()
    {
    }
    /**
     * @alias oci_lob_tell
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function tell() : int|false
    {
    }
    /**
     * @alias oci_lob_rewind
     * @return bool
     */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /**
     * @alias oci_lob_rewind
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function rewind() : bool
    {
    }
    /**
     * @alias oci_lob_seek
     * @return bool
     */
    #[\Until('8.1')]
    public function seek(int $offset, int $whence = OCI_SEEK_SET)
    {
    }
    /**
     * @alias oci_lob_seek
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function seek(int $offset, int $whence = OCI_SEEK_SET) : bool
    {
    }
    /**
     * @alias oci_lob_size
     * @return int|false
     */
    #[\Until('8.1')]
    public function size()
    {
    }
    /**
     * @alias oci_lob_size
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function size() : int|false
    {
    }
    /**
     * @alias oci_lob_write
     * @return int|false
     */
    #[\Until('8.1')]
    public function write(string $data, ?int $length = null)
    {
    }
    /**
     * @alias oci_lob_write
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function write(string $data, ?int $length = null) : int|false
    {
    }
    /**
     * @alias oci_lob_append
     * @return bool
     */
    #[\Until('8.1')]
    public function append(OCILob $from)
    {
    }
    /**
     * @alias oci_lob_append
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function append(OCILob $from) : bool
    {
    }
    /**
     * @alias oci_lob_truncate
     * @return bool
     */
    #[\Until('8.1')]
    public function truncate(int $length = 0)
    {
    }
    /**
     * @alias oci_lob_truncate
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function truncate(int $length = 0) : bool
    {
    }
    /**
     * @alias oci_lob_erase
     * @return int|false
     */
    #[\Until('8.1')]
    public function erase(?int $offset = null, ?int $length = null)
    {
    }
    /**
     * @alias oci_lob_erase
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function erase(?int $offset = null, ?int $length = null) : int|false
    {
    }
    /**
     * @alias oci_lob_flush
     * @tentative-return-type
     */
    public function flush(int $flag = 0) : bool
    {
    }
    /**
     * @alias ocisetbufferinglob
     * @return bool
     */
    #[\Until('8.1')]
    public function setBuffering(bool $mode)
    {
    }
    /**
     * @alias ocisetbufferinglob
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function setBuffering(bool $mode) : bool
    {
    }
    /**
     * @alias ocigetbufferinglob
     * @return bool
     */
    #[\Until('8.1')]
    public function getBuffering()
    {
    }
    /**
     * @alias ocigetbufferinglob
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function getBuffering() : bool
    {
    }
    /**
     * @alias oci_lob_export
     * @return bool
     */
    #[\Until('8.1')]
    public function writeToFile(string $filename, ?int $offset = null, ?int $length = null)
    {
    }
    /**
     * @alias oci_lob_export
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function writeToFile(string $filename, ?int $offset = null, ?int $length = null) : bool
    {
    }
    /**
     * @alias oci_lob_export
     * @return bool
     */
    #[\Until('8.1')]
    public function export(string $filename, ?int $offset = null, ?int $length = null)
    {
    }
    /**
     * @alias oci_lob_export
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function export(string $filename, ?int $offset = null, ?int $length = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function writeTemporary(string $data, int $type = OCI_TEMP_CLOB)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function writeTemporary(string $data, int $type = OCI_TEMP_CLOB) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function close()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function close() : bool
    {
    }
    /**
     * @alias oci_free_descriptor
     * @return bool
     */
    #[\Until('8.1')]
    public function free()
    {
    }
    /**
     * @alias oci_free_descriptor
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function free() : bool
    {
    }
}