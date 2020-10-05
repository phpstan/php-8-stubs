<?php 

class SQLite3Result
{
    private function __construct()
    {
    }
    /** @return int */
    public function numColumns()
    {
    }
    /** @return string|false */
    public function columnName(int $column_number)
    {
    }
    /** @return int|false */
    public function columnType(int $column_number)
    {
    }
    /** @return array|false */
    public function fetchArray(int $mode = SQLITE3_BOTH)
    {
    }
    /** @return bool */
    public function reset()
    {
    }
    /** @return bool */
    public function finalize()
    {
    }
}