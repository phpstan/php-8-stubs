<?php 

/** @generate-function-entries */
// These are extension methods for PDO. This is not a real class.
class PDO_SQLite_Ext
{
    /** @return bool */
    #[\Until('8.1')]
    public function sqliteCreateFunction(string $name, callable $callback, int $numArgs = -1, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function sqliteCreateFunction(string $name, callable $callback, int $numArgs = -1, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function sqliteCreateAggregate(string $name, callable $step, callable $finalize, int $numArgs = -1)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function sqliteCreateAggregate(string $name, callable $step, callable $finalize, int $numArgs = -1) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function sqliteCreateCollation(string $name, callable $callback)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function sqliteCreateCollation(string $name, callable $callback) : bool
    {
    }
}