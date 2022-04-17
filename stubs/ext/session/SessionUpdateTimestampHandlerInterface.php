<?php 

interface SessionUpdateTimestampHandlerInterface
{
    /** @return bool */
    #[\Until('8.1')]
    public function validateId(string $id);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function validateId(string $id) : bool;
    /** @return bool */
    #[\Until('8.1')]
    public function updateTimestamp(string $id, string $data);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function updateTimestamp(string $id, string $data) : bool;
}