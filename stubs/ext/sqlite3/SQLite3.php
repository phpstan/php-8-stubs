<?php 

/** @generate-class-entries */
/** @not-serializable */
class SQLite3
{
    /**
     * @implementation-alias SQLite3::open
     * @no-verify SQLite3::open should really be static
     */
    public function __construct(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryptionKey = "")
    {
    }
    /** @tentative-return-type */
    public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryptionKey = "")
    {
    }
    /** @return bool */
    public function close()
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    public static function version()
    {
    }
    /** @tentative-return-type */
    public function lastInsertRowID()
    {
    }
    /** @tentative-return-type */
    public function lastErrorCode()
    {
    }
    /** @tentative-return-type */
    public function lastExtendedErrorCode()
    {
    }
    /** @tentative-return-type */
    public function lastErrorMsg()
    {
    }
    /** @tentative-return-type */
    public function changes()
    {
    }
    /** @tentative-return-type */
    public function busyTimeout(int $milliseconds)
    {
    }
    #ifndef SQLITE_OMIT_LOAD_EXTENSION
    /** @tentative-return-type */
    public function loadExtension(string $name)
    {
    }
    #endif
    #if SQLITE_VERSION_NUMBER >= 3006011
    /** @tentative-return-type */
    public function backup(SQLite3 $destination, string $sourceDatabase = "main", string $destinationDatabase = "main")
    {
    }
    #endif
    /** @tentative-return-type */
    public static function escapeString(string $string)
    {
    }
    /** @tentative-return-type */
    public function prepare(string $query)
    {
    }
    /** @tentative-return-type */
    public function exec(string $query)
    {
    }
    /** @tentative-return-type */
    public function query(string $query)
    {
    }
    /** @tentative-return-type */
    public function querySingle(string $query, bool $entireRow = false)
    {
    }
    /** @tentative-return-type */
    public function createFunction(string $name, callable $callback, int $argCount = -1, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function createAggregate(string $name, callable $stepCallback, callable $finalCallback, int $argCount = -1)
    {
    }
    /** @tentative-return-type */
    public function createCollation(string $name, callable $callback)
    {
    }
    /** @return resource|false */
    public function openBlob(string $table, string $column, int $rowid, string $database = "main", int $flags = SQLITE3_OPEN_READONLY)
    {
    }
    /** @tentative-return-type */
    public function enableExceptions(bool $enable = false)
    {
    }
    /** @tentative-return-type */
    public function enableExtendedResultCodes(bool $enable = true)
    {
    }
    /** @tentative-return-type */
    public function setAuthorizer(?callable $callback)
    {
    }
}