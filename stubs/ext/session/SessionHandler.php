<?php 

class SessionHandler implements \SessionHandlerInterface, \SessionIdInterface
{
    /** @tentative-return-type */
    public function open(string $path, string $name)
    {
    }
    /** @tentative-return-type */
    public function close()
    {
    }
    /** @tentative-return-type */
    public function read(string $id)
    {
    }
    /** @tentative-return-type */
    public function write(string $id, string $data)
    {
    }
    /** @tentative-return-type */
    public function destroy(string $id)
    {
    }
    /** @tentative-return-type */
    public function gc(int $max_lifetime)
    {
    }
    /** @tentative-return-type */
    public function create_sid()
    {
    }
}