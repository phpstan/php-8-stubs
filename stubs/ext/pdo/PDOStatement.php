<?php 

/** @generate-class-entries */
/** @not-serializable */
class PDOStatement implements \IteratorAggregate
{
    /** @tentative-return-type */
    public function bindColumn(string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)
    {
    }
    /** @tentative-return-type */
    public function bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)
    {
    }
    /** @tentative-return-type */
    public function bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR)
    {
    }
    /** @tentative-return-type */
    public function closeCursor()
    {
    }
    /** @tentative-return-type */
    public function columnCount()
    {
    }
    /** @tentative-return-type */
    public function debugDumpParams()
    {
    }
    /** @tentative-return-type */
    public function errorCode()
    {
    }
    /** @tentative-return-type */
    public function errorInfo()
    {
    }
    /** @tentative-return-type */
    public function execute(?array $params = null)
    {
    }
    /** @tentative-return-type */
    public function fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0)
    {
    }
    /** @tentative-return-type */
    public function fetchAll(int $mode = PDO::FETCH_DEFAULT, mixed ...$args)
    {
    }
    /** @tentative-return-type */
    public function fetchColumn(int $column = 0)
    {
    }
    /** @tentative-return-type */
    public function fetchObject(?string $class = "stdClass", array $constructorArgs = [])
    {
    }
    /** @tentative-return-type */
    public function getAttribute(int $name)
    {
    }
    /** @tentative-return-type */
    public function getColumnMeta(int $column)
    {
    }
    /** @tentative-return-type */
    public function nextRowset()
    {
    }
    /** @tentative-return-type */
    public function rowCount()
    {
    }
    /** @tentative-return-type */
    public function setAttribute(int $attribute, mixed $value)
    {
    }
    /** @return bool */
    public function setFetchMode(int $mode, mixed ...$args)
    {
    }
    // TODO make return type void
    public function getIterator() : Iterator
    {
    }
}