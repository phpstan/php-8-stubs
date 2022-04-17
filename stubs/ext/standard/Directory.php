<?php 

/** @generate-class-entries */
class Directory
{
    /**
     * @return void
     * @implementation-alias closedir
     */
    #[\Until('8.1')]
    public function close()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias closedir
     */
    #[\Since('8.1')]
    public function close() : void
    {
    }
    /**
     * @return void
     * @implementation-alias rewinddir
     */
    #[\Until('8.1')]
    public function rewind()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias rewinddir
     */
    #[\Since('8.1')]
    public function rewind() : void
    {
    }
    /**
     * @return string|false
     * @implementation-alias readdir
     */
    #[\Until('8.1')]
    public function read()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias readdir
     */
    #[\Since('8.1')]
    public function read() : string|false
    {
    }
}