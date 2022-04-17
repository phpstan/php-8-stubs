<?php 

class OCILob
{
    /**
     * @alias oci_lob_save
     * @tentative-return-type
     */
    public function save(string $data, int $offset = 0)
    {
    }
    /**
     * @alias oci_lob_import
     * @tentative-return-type
     */
    public function import(string $filename)
    {
    }
    /**
     * @alias oci_lob_import
     * @tentative-return-type
     */
    public function saveFile(string $filename)
    {
    }
    /**
     * @alias oci_lob_load
     * @tentative-return-type
     */
    public function load()
    {
    }
    /**
     * @alias oci_lob_read
     * @tentative-return-type
     */
    public function read(int $length)
    {
    }
    /**
     * @alias oci_lob_eof
     * @tentative-return-type
     */
    public function eof()
    {
    }
    /**
     * @alias oci_lob_tell
     * @tentative-return-type
     */
    public function tell()
    {
    }
    /**
     * @alias oci_lob_rewind
     * @tentative-return-type
     */
    public function rewind()
    {
    }
    /**
     * @alias oci_lob_seek
     * @tentative-return-type
     */
    public function seek(int $offset, int $whence = OCI_SEEK_SET)
    {
    }
    /**
     * @alias oci_lob_size
     * @tentative-return-type
     */
    public function size()
    {
    }
    /**
     * @alias oci_lob_write
     * @tentative-return-type
     */
    public function write(string $data, ?int $length = null)
    {
    }
    /**
     * @alias oci_lob_append
     * @tentative-return-type
     */
    public function append(OCILob $from)
    {
    }
    /**
     * @alias oci_lob_truncate
     * @tentative-return-type
     */
    public function truncate(int $length = 0)
    {
    }
    /**
     * @alias oci_lob_erase
     * @tentative-return-type
     */
    public function erase(?int $offset = null, ?int $length = null)
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
     * @tentative-return-type
     */
    public function setBuffering(bool $mode)
    {
    }
    /**
     * @alias ocigetbufferinglob
     * @tentative-return-type
     */
    public function getBuffering()
    {
    }
    /**
     * @alias oci_lob_export
     * @tentative-return-type
     */
    public function writeToFile(string $filename, ?int $offset = null, ?int $length = null)
    {
    }
    /**
     * @alias oci_lob_export
     * @tentative-return-type
     */
    public function export(string $filename, ?int $offset = null, ?int $length = null)
    {
    }
    /** @tentative-return-type */
    public function writeTemporary(string $data, int $type = OCI_TEMP_CLOB)
    {
    }
    /** @tentative-return-type */
    public function close()
    {
    }
    /**
     * @alias oci_free_descriptor
     * @tentative-return-type
     */
    public function free()
    {
    }
}