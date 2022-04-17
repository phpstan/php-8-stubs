<?php 

/** @not-serializable */
class SQLite3Result
{
    private function __construct()
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function numColumns()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function numColumns() : int
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function columnName(int $column)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function columnName(int $column) : string|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function columnType(int $column)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function columnType(int $column) : int|false
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function fetchArray(int $mode = SQLITE3_BOTH)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fetchArray(int $mode = SQLITE3_BOTH) : array|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function reset()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function reset() : bool
    {
    }
    /** @return bool */
    public function finalize()
    {
    }
}