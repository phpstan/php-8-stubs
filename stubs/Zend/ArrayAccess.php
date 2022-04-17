<?php 

interface ArrayAccess
{
    /** @return bool */
    #[\Until('8.1')]
    public function offsetExists(mixed $offset);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function offsetExists(mixed $offset) : bool;
    /**
     * Actually this should be return by ref but atm cannot be.
     * @return mixed
     */
    #[\Until('8.1')]
    public function offsetGet(mixed $offset);
    /**
     * Actually this should be return by ref but atm cannot be.
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetGet(mixed $offset) : mixed;
    /** @return void */
    #[\Until('8.1')]
    public function offsetSet(mixed $offset, mixed $value);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function offsetSet(mixed $offset, mixed $value) : void;
    /** @return void */
    #[\Until('8.1')]
    public function offsetUnset(mixed $offset);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function offsetUnset(mixed $offset) : void;
}