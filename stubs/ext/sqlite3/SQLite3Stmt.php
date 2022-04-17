<?php 

/** @not-serializable */
class SQLite3Stmt
{
    private function __construct(SQLite3 $sqlite3, string $query)
    {
    }
    /** @tentative-return-type */
    public function bindParam(string|int $param, mixed &$var, int $type = SQLITE3_TEXT)
    {
    }
    /** @tentative-return-type */
    public function bindValue(string|int $param, mixed $value, int $type = SQLITE3_TEXT)
    {
    }
    /** @tentative-return-type */
    public function clear()
    {
    }
    /** @tentative-return-type */
    public function close()
    {
    }
    /** @tentative-return-type */
    public function execute()
    {
    }
    /** @tentative-return-type */
    public function getSQL(bool $expand = false)
    {
    }
    /** @tentative-return-type */
    public function paramCount()
    {
    }
    /** @tentative-return-type */
    public function readOnly()
    {
    }
    /** @tentative-return-type */
    public function reset()
    {
    }
}