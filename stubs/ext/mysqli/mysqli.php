<?php 

class mysqli
{
    public function __construct(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_autocommit
     */
    public function autocommit(bool $enable)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_begin_transaction
     */
    public function begin_transaction(int $flags = 0, ?string $name = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_change_user
     */
    public function change_user(string $username, string $password, ?string $database)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_character_set_name
     */
    public function character_set_name()
    {
    }
    /**
     * @return true
     * @alias mysqli_close
     * @no-verify
     */
    public function close()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_commit
     */
    public function commit(int $flags = 0, ?string $name = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_connect
     * @no-verify
     */
    public function connect(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_dump_debug_info
     */
    public function dump_debug_info()
    {
    }
    /**
     * @return true
     * @alias mysqli_debug
     * @no-verify Should really be a static method
     */
    public function debug(string $options)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_get_charset
     */
    public function get_charset()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_get_client_info
     * @deprecated 8.1.0
     */
    public function get_client_info()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return array<string, mixed>
     * @tentative-return-type
     * @alias mysqli_get_connection_stats
     */
    public function get_connection_stats()
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_get_server_info
     */
    public function get_server_info()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_get_warnings
     */
    public function get_warnings()
    {
    }
    /**
     * @deprecated
     * @return bool|null
     * */
    public function init()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_kill
     */
    public function kill(int $process_id)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_multi_query
     */
    public function multi_query(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_more_results
     */
    public function more_results()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_next_result
     */
    public function next_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_ping
     */
    public function ping()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_poll
     */
    public static function poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0)
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_prepare
     */
    public function prepare(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_query
     */
    public function query(string $query, int $result_mode = MYSQLI_STORE_RESULT)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_real_connect
     */
    public function real_connect(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null, int $flags = 0)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_real_escape_string
     */
    public function real_escape_string(string $string)
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_reap_async_query
     */
    public function reap_async_query()
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_real_escape_string
     */
    public function escape_string(string $string)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_real_query
     */
    public function real_query(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_release_savepoint
     */
    public function release_savepoint(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_rollback
     */
    public function rollback(int $flags = 0, ?string $name = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_savepoint
     */
    public function savepoint(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_select_db
     */
    public function select_db(string $database)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_set_charset
     */
    public function set_charset(string $charset)
    {
    }
    /**
     * @param string|int $value
     * @tentative-return-type
     * @alias mysqli_options
     */
    public function options(int $option, $value)
    {
    }
    /**
     * @param string|int $value
     * @tentative-return-type
     * @alias mysqli_options
     */
    public function set_opt(int $option, $value)
    {
    }
    /**
     * @return true
     * @alias mysqli_ssl_set
     * @no-verify
     */
    public function ssl_set(?string $key, ?string $certificate, ?string $ca_certificate, ?string $ca_path, ?string $cipher_algos)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_stat
     */
    public function stat()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_init
     */
    public function stmt_init()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_store_result
     */
    public function store_result(int $mode = 0)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_thread_safe
     */
    public function thread_safe()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_use_result
     */
    public function use_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_refresh
     */
    public function refresh(int $flags)
    {
    }
}