<?php 

/** @generate-class-entries */
/** @not-serializable */
class CURLFile
{
    public function __construct(string $filename, ?string $mime_type = null, ?string $posted_filename = null)
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getFilename()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFilename() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getMimeType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMimeType() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getPostFilename()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPostFilename() : string
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setMimeType(string $mime_type)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMimeType(string $mime_type) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setPostFilename(string $posted_filename)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setPostFilename(string $posted_filename) : void
    {
    }
}