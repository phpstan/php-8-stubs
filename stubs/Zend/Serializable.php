<?php 

interface Serializable
{
    /** @return string */
    public function serialize();
    /** @return void */
    public function unserialize(string $serialized);
}