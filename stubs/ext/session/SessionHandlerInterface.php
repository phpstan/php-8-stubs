<?php 

interface SessionHandlerInterface
{
    /** @return bool */
    public function open(string $path, string $name);
    /** @return bool */
    public function close();
    /** @return string|false */
    public function read(string $id);
    /** @return bool */
    public function write(string $id, string $data);
    /** @return bool */
    public function destroy(string $id);
    /** @return int|false */
    public function gc(int $max_lifetime);
}