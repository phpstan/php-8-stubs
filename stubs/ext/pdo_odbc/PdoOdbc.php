<?php 

/**
 * @strict-properties
 * @not-serializable
 */
#[\Since('8.2')]
class PdoOdbc extends \PDO
{
    /** @cvalue PDO_ODBC_ATTR_USE_CURSOR_LIBRARY */
    public const int ATTR_USE_CURSOR_LIBRARY = UNKNOWN;
    /** @cvalue PDO_ODBC_ATTR_ASSUME_UTF8 */
    public const int ATTR_ASSUME_UTF8 = UNKNOWN;
    /** @cvalue SQL_CUR_USE_IF_NEEDED */
    public const int SQL_USE_IF_NEEDED = UNKNOWN;
    /** @cvalue SQL_CUR_USE_DRIVER */
    public const int SQL_USE_DRIVER = UNKNOWN;
    /** @cvalue SQL_CUR_USE_ODBC */
    public const int SQL_USE_ODBC = UNKNOWN;
}