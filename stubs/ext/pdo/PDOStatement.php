<?php 

/** @generate-class-entries */
/** @not-serializable */
class PDOStatement implements \IteratorAggregate
{
    /** @return bool */
    #[\Until('8.1')]
    public function bindColumn(string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function bindColumn(string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function bindParam(string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function bindValue(string|int $param, mixed $value, int $type = PDO::PARAM_STR) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function closeCursor()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function closeCursor() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function columnCount()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function columnCount() : int
    {
    }
    /** @return bool|null */
    #[\Until('8.1')]
    public function debugDumpParams()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function debugDumpParams() : ?bool
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function errorCode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function errorCode() : ?string
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function errorInfo()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function errorInfo() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function execute(?array $params = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function execute(?array $params = null) : bool
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fetch(int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0) : mixed
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function fetchAll(int $mode = PDO::FETCH_DEFAULT, mixed ...$args)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fetchAll(int $mode = PDO::FETCH_DEFAULT, mixed ...$args) : array
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function fetchColumn(int $column = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fetchColumn(int $column = 0) : mixed
    {
    }
    /** @return object|false */
    #[\Until('8.1')]
    public function fetchObject(?string $class = "stdClass", array $constructorArgs = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function fetchObject(?string $class = "stdClass", array $constructorArgs = []) : object|false
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getAttribute(int $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttribute(int $name) : mixed
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function getColumnMeta(int $column)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getColumnMeta(int $column) : array|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function nextRowset()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function nextRowset() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function rowCount()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rowCount() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setAttribute(int $attribute, mixed $value)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setAttribute(int $attribute, mixed $value) : bool
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