<?php 

/** @generate-function-entries */
class Directory
{
    /**
     * @tentative-return-type
     * @implementation-alias closedir
     * @return void
     */
    #[\Until('8.5')]
    public function close()
    {
    }
    #[\Since('8.5')]
    public function close(): void
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias rewinddir
     * @return void
     */
    #[\Until('8.5')]
    public function rewind()
    {
    }
    #[\Since('8.5')]
    public function rewind(): void
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias readdir
     * @return (string | false)
     */
    #[\Until('8.5')]
    public function read()
    {
    }
    #[\Since('8.5')]
    public function read(): string|false
    {
    }
}