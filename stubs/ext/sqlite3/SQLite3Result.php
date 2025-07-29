<?php 

class SQLite3Result
{
    private function __construct()
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    public function numColumns()
    {
    }
    /**
     * @tentative-return-type
     * @return (string | false)
     */
    public function columnName(int $column)
    {
    }
    /**
     * @tentative-return-type
     * @return (int | false)
     */
    public function columnType(int $column)
    {
    }
    /**
     * @tentative-return-type
     * @return (array | false)
     */
    public function fetchArray(int $mode = SQLITE3_BOTH)
    {
    }
    #[\Since('8.5')]
    public function fetchAll(int $mode = SQLITE3_BOTH): array|false
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function reset()
    {
    }
    /**
     * @tentative-return-type
     * @return bool
     */
    public function finalize()
    {
    }
}