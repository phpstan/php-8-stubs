<?php 

/** @generate-class-entries */
/** @not-serializable */
class PDO
{
    public function __construct(string $dsn, ?string $username = null, ?string $password = null, ?array $options = null)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function beginTransaction()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function beginTransaction() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function commit()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function commit() : bool
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
    /** @return int|false */
    #[\Until('8.1')]
    public function exec(string $statement)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function exec(string $statement) : int|false
    {
    }
    /** @return bool|int|string|array|null */
    #[\Until('8.1')]
    public function getAttribute(int $attribute)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAttribute(int $attribute) : mixed
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public static function getAvailableDrivers()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function getAvailableDrivers() : array
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function inTransaction()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function inTransaction() : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function lastInsertId(?string $name = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lastInsertId(?string $name = null) : string|false
    {
    }
    /** @return PDOStatement|false */
    #[\Until('8.1')]
    public function prepare(string $query, array $options = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function prepare(string $query, array $options = []) : PDOStatement|false
    {
    }
    /** @return PDOStatement|false */
    #[\Until('8.1')]
    public function query(string $query, ?int $fetchMode = null, mixed ...$fetchModeArgs)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function query(string $query, ?int $fetchMode = null, mixed ...$fetchModeArgs) : PDOStatement|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function quote(string $string, int $type = PDO::PARAM_STR)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function quote(string $string, int $type = PDO::PARAM_STR) : string|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function rollBack()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function rollBack() : bool
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