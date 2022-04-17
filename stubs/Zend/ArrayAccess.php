<?php 

interface ArrayAccess
{
    /** @tentative-return-type */
    public function offsetExists(mixed $offset);
    /**
     * Actually this should be return by ref but atm cannot be.
     * @tentative-return-type
     */
    public function offsetGet(mixed $offset);
    /** @tentative-return-type */
    public function offsetSet(mixed $offset, mixed $value);
    /** @tentative-return-type */
    public function offsetUnset(mixed $offset);
}