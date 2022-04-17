<?php 

interface SessionHandlerInterface
{
    /** @return bool */
    #[\Until('8.1')]
    public function open(string $path, string $name);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function open(string $path, string $name) : bool;
    /** @return bool */
    #[\Until('8.1')]
    public function close();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function close() : bool;
    /** @return string|false */
    #[\Until('8.1')]
    public function read(string $id);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function read(string $id) : string|false;
    /** @return bool */
    #[\Until('8.1')]
    public function write(string $id, string $data);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function write(string $id, string $data) : bool;
    /** @return bool */
    #[\Until('8.1')]
    public function destroy(string $id);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function destroy(string $id) : bool;
    /** @return int|false */
    #[\Until('8.1')]
    public function gc(int $max_lifetime);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function gc(int $max_lifetime) : int|false;
}