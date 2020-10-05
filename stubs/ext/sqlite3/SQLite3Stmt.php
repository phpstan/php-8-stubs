<?php 

class SQLite3Stmt
{
    private function __construct(SQLite3 $sqlite3, string $sql)
    {
    }
    /** @return bool */
    public function bindParam(string|int $param_number, mixed &$param, int $type = SQLITE3_TEXT)
    {
    }
    /** @return bool */
    public function bindValue(string|int $param_number, mixed $param, int $type = SQLITE3_TEXT)
    {
    }
    /** @return bool */
    public function clear()
    {
    }
    /** @return bool */
    public function close()
    {
    }
    /** @return SQLite3Result|false */
    public function execute()
    {
    }
    /** @return string|false */
    public function getSQL(bool $expanded = false)
    {
    }
    /** @return int */
    public function paramCount()
    {
    }
    /** @return bool */
    public function readOnly()
    {
    }
    /** @return bool */
    public function reset()
    {
    }
}