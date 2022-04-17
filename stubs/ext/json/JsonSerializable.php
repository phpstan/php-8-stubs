<?php 

interface JsonSerializable
{
    /** @tentative-return-type */
    public function jsonSerialize();
}