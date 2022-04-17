<?php 

/** @not-serializable */
class SQLite3Stmt
{
    private function __construct(SQLite3 $sqlite3, string $query)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function bindParam(string|int $param, mixed &$var, int $type = SQLITE3_TEXT)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function bindParam(string|int $param, mixed &$var, int $type = SQLITE3_TEXT) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function bindValue(string|int $param, mixed $value, int $type = SQLITE3_TEXT)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function bindValue(string|int $param, mixed $value, int $type = SQLITE3_TEXT) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function clear()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function clear() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function close()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function close() : bool
    {
    }
    /** @return SQLite3Result|false */
    #[\Until('8.1')]
    public function execute()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function execute() : SQLite3Result|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getSQL(bool $expand = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSQL(bool $expand = false) : string|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function paramCount()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function paramCount() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function readOnly()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function readOnly() : bool
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
}