<?php 

namespace Pdo;

/**
 * @strict-properties
 * @not-serializable
 */
#[\Since('8.4')]
class Sqlite extends \PDO
{
    // Registers an aggregating User Defined Function for use in SQL statements
    public function createAggregate(string $name, callable $step, callable $finalize, int $numArgs = -1): bool
    {
    }
    // Registers a User Defined Function for use as a collating function in SQL statements
    public function createCollation(string $name, callable $callback): bool
    {
    }
    public function createFunction(string $function_name, callable $callback, int $num_args = -1, int $flags = 0): bool
    {
    }
    #ifndef PDO_SQLITE_OMIT_LOAD_EXTENSION
    public function loadExtension(string $name): void
    {
    }
    #endif
    /** @return resource|false */
    public function openBlob(string $table, string $column, int $rowid, ?string $dbname = "main", int $flags = \Pdo\Sqlite::OPEN_READONLY)
    {
    }
    #[\Since('8.5')]
    public function setAuthorizer(?callable $callback): void
    {
    }
    #ifdef SQLITE_DETERMINISTIC
    /** @cvalue SQLITE_DETERMINISTIC */
    public const int DETERMINISTIC = UNKNOWN;
    #endif
    /** @cvalue SQLITE_OPEN_READONLY */
    public const int OPEN_READONLY = UNKNOWN;
    /** @cvalue SQLITE_OPEN_READWRITE */
    public const int OPEN_READWRITE = UNKNOWN;
    /** @cvalue SQLITE_OPEN_CREATE */
    public const int OPEN_CREATE = UNKNOWN;
    /** @cvalue PDO_SQLITE_ATTR_OPEN_FLAGS */
    public const int ATTR_OPEN_FLAGS = UNKNOWN;
    /** @cvalue PDO_SQLITE_ATTR_READONLY_STATEMENT */
    public const int ATTR_READONLY_STATEMENT = UNKNOWN;
    /** @cvalue PDO_SQLITE_ATTR_EXTENDED_RESULT_CODES */
    public const int ATTR_EXTENDED_RESULT_CODES = UNKNOWN;
    /** @cvalue PDO_SQLITE_ATTR_BUSY_STATEMENT */
    #[\Since('8.5')]
    public const int ATTR_BUSY_STATEMENT = UNKNOWN;
    /** @cvalue PDO_SQLITE_ATTR_EXPLAIN_STATEMENT */
    #[\Since('8.5')]
    public const int ATTR_EXPLAIN_STATEMENT = UNKNOWN;
    /** @cvalue PDO_SQLITE_ATTR_TRANSACTION_MODE */
    #[\Since('8.5')]
    public const int ATTR_TRANSACTION_MODE = UNKNOWN;
    #[\Since('8.5')]
    public const int TRANSACTION_MODE_DEFERRED = 0;
    #[\Since('8.5')]
    public const int TRANSACTION_MODE_IMMEDIATE = 1;
    #[\Since('8.5')]
    public const int TRANSACTION_MODE_EXCLUSIVE = 2;
    #if SQLITE_VERSION_NUMBER >= 3043000
    #[\Since('8.5')]
    public const int EXPLAIN_MODE_PREPARED = 0;
    #[\Since('8.5')]
    public const int EXPLAIN_MODE_EXPLAIN = 1;
    #[\Since('8.5')]
    public const int EXPLAIN_MODE_EXPLAIN_QUERY_PLAN = 2;
    #endif
    /** @cvalue SQLITE_OK */
    #[\Since('8.5')]
    public const int OK = UNKNOWN;
    /* Constants for authorizer return */
    /** @cvalue SQLITE_DENY */
    #[\Since('8.5')]
    public const int DENY = UNKNOWN;
    /** @cvalue SQLITE_IGNORE */
    #[\Since('8.5')]
    public const int IGNORE = UNKNOWN;
}