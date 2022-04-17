<?php 

/** @generate-class-entries */
/** @not-serializable */
class PDO
{
    public function __construct(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null)
    {
    }
    /** @tentative-return-type */
    public function beginTransaction()
    {
    }
    /** @tentative-return-type */
    public function commit()
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
    public function exec(string $statement)
    {
    }
    /** @tentative-return-type */
    public function getAttribute(int $attribute)
    {
    }
    /** @tentative-return-type */
    public static function getAvailableDrivers()
    {
    }
    /** @tentative-return-type */
    public function inTransaction()
    {
    }
    /** @tentative-return-type */
    public function lastInsertId(?string $name = null)
    {
    }
    /** @tentative-return-type */
    public function prepare(string $query, array $options = [])
    {
    }
    /** @tentative-return-type */
    public function query(string $query, ?int $fetchMode = null, mixed ...$fetchModeArgs)
    {
    }
    /** @tentative-return-type */
    public function quote(string $string, int $type = PDO::PARAM_STR)
    {
    }
    /** @tentative-return-type */
    public function rollBack()
    {
    }
    #[\Until('8.1')]
    public function setAttribute(int $attribute, mixed $value)
    {
    }
    #[\Since('8.1')]
    public function setAttribute(int $attribute, mixed $value) : bool
    {
    }
}