<?php 

interface JsonSerializable
{
    /** @return mixed */
    #[\Until('8.1')]
    public function jsonSerialize();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function jsonSerialize() : mixed;
}