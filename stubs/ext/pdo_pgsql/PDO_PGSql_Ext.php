<?php 

/** @generate-function-entries */
// These are extension methods for PDO. This is not a real class.
class PDO_PGSql_Ext
{
    /** @return bool */
    #[\Until('8.1')]
    public function pgsqlCopyFromArray(string $tableName, array $rows, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlCopyFromArray(string $tableName, array $rows, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function pgsqlCopyFromFile(string $tableName, string $filename, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlCopyFromFile(string $tableName, string $filename, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null) : bool
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function pgsqlCopyToArray(string $tableName, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlCopyToArray(string $tableName, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null) : array|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function pgsqlCopyToFile(string $tableName, string $filename, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlCopyToFile(string $tableName, string $filename, string $separator = "\t", string $nullAs = "\\\\N", ?string $fields = null) : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function pgsqlLOBCreate()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlLOBCreate() : string|false
    {
    }
    /** @return resource|false */
    public function pgsqlLOBOpen(string $oid, string $mode = "rb")
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function pgsqlLOBUnlink(string $oid)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlLOBUnlink(string $oid) : bool
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function pgsqlGetNotify(int $fetchMode = PDO::FETCH_USE_DEFAULT, int $timeoutMilliseconds = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlGetNotify(int $fetchMode = PDO::FETCH_USE_DEFAULT, int $timeoutMilliseconds = 0) : array|false
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function pgsqlGetPid()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function pgsqlGetPid() : int
    {
    }
}