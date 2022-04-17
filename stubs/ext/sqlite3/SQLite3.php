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
    /** @return void */
    #[\Until('8.1')]
    public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryptionKey = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryptionKey = "") : void
    {
    }
    /** @return bool */
    public function close()
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public static function version()
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function version() : array
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function lastInsertRowID()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lastInsertRowID() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function lastErrorCode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lastErrorCode() : int
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function lastExtendedErrorCode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lastExtendedErrorCode() : int
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function lastErrorMsg()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function lastErrorMsg() : string
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function changes()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function changes() : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function busyTimeout(int $milliseconds)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function busyTimeout(int $milliseconds) : bool
    {
    }
    #ifndef SQLITE_OMIT_LOAD_EXTENSION
    /** @return bool */
    #[\Until('8.1')]
    public function loadExtension(string $name)
    {
    }
    #ifndef SQLITE_OMIT_LOAD_EXTENSION
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function loadExtension(string $name) : bool
    {
    }
    #endif
    #if SQLITE_VERSION_NUMBER >= 3006011
    /** @return bool */
    #[\Until('8.1')]
    public function backup(SQLite3 $destination, string $sourceDatabase = "main", string $destinationDatabase = "main")
    {
    }
    #endif
    #if SQLITE_VERSION_NUMBER >= 3006011
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function backup(SQLite3 $destination, string $sourceDatabase = "main", string $destinationDatabase = "main") : bool
    {
    }
    #endif
    /** @return string */
    #[\Until('8.1')]
    public static function escapeString(string $string)
    {
    }
    #endif
    /** @tentative-return-type */
    #[\Since('8.1')]
    public static function escapeString(string $string) : string
    {
    }
    /** @return SQLite3Stmt|false */
    #[\Until('8.1')]
    public function prepare(string $query)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function prepare(string $query) : SQLite3Stmt|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function exec(string $query)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function exec(string $query) : bool
    {
    }
    /** @return SQLite3Result|false */
    #[\Until('8.1')]
    public function query(string $query)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function query(string $query) : SQLite3Result|false
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function querySingle(string $query, bool $entireRow = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function querySingle(string $query, bool $entireRow = false) : mixed
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function createFunction(string $name, callable $callback, int $argCount = -1, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function createFunction(string $name, callable $callback, int $argCount = -1, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function createAggregate(string $name, callable $stepCallback, callable $finalCallback, int $argCount = -1)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function createAggregate(string $name, callable $stepCallback, callable $finalCallback, int $argCount = -1) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function createCollation(string $name, callable $callback)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function createCollation(string $name, callable $callback) : bool
    {
    }
    /** @return resource|false */
    public function openBlob(string $table, string $column, int $rowid, string $database = "main", int $flags = SQLITE3_OPEN_READONLY)
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function enableExceptions(bool $enable = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function enableExceptions(bool $enable = false) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function enableExtendedResultCodes(bool $enable = true)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function enableExtendedResultCodes(bool $enable = true) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setAuthorizer(?callable $callback)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setAuthorizer(?callable $callback) : bool
    {
    }
}