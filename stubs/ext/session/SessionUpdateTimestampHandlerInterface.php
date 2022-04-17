<?php 

interface SessionUpdateTimestampHandlerInterface
{
    /** @tentative-return-type */
    public function validateId(string $id);
    /** @tentative-return-type */
    public function updateTimestamp(string $id, string $data);
}