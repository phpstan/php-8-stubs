<?php 

class mysqli
{
    public function __construct(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null)
    {
    }
    /**
     * @return bool
     * @alias mysqli_autocommit
     */
    #[\Until('8.1')]
    public function autocommit(bool $enable)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_autocommit
     */
    #[\Since('8.1')]
    public function autocommit(bool $enable) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_begin_transaction
     */
    #[\Until('8.1')]
    public function begin_transaction(int $flags = 0, ?string $name = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_begin_transaction
     */
    #[\Since('8.1')]
    public function begin_transaction(int $flags = 0, ?string $name = null) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_change_user
     */
    #[\Until('8.1')]
    public function change_user(string $username, string $password, ?string $database)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_change_user
     */
    #[\Since('8.1')]
    public function change_user(string $username, string $password, ?string $database) : bool
    {
    }
    /**
     * @return string
     * @alias mysqli_character_set_name
     */
    #[\Until('8.1')]
    public function character_set_name()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_character_set_name
     */
    #[\Since('8.1')]
    public function character_set_name() : string
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
    /**
     * @return bool
     * @alias mysqli_commit
     */
    #[\Until('8.1')]
    public function commit(int $flags = 0, ?string $name = null)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_commit
     */
    #[\Since('8.1')]
    public function commit(int $flags = 0, ?string $name = null) : bool
    {
    }
    /**
     * @return bool|null
     * @alias mysqli_connect
     * @no-verify
     */
    #[\Until('8.1')]
    public function connect(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_connect
     * @no-verify
     */
    #[\Since('8.1')]
    public function connect(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_dump_debug_info
     */
    #[\Until('8.1')]
    public function dump_debug_info()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_dump_debug_info
     */
    #[\Since('8.1')]
    public function dump_debug_info() : bool
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
    /**
     * @return object|null
     * @alias mysqli_get_charset
     */
    #[\Until('8.1')]
    public function get_charset()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_get_charset
     */
    #[\Since('8.1')]
    public function get_charset() : ?object
    {
    }
    /**
     * @return string
     * @alias mysqli_get_client_info
     */
    #[\Until('8.1')]
    public function get_client_info()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_get_client_info
     * @deprecated 8.1.0
     */
    #[\Since('8.1')]
    public function get_client_info() : string
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return array
     * @alias mysqli_get_connection_stats
     */
    #[\Until('8.1')]
    public function get_connection_stats()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return array<string, mixed>
     * @tentative-return-type
     * @alias mysqli_get_connection_stats
     */
    #[\Since('8.1')]
    public function get_connection_stats() : array
    {
    }
    #endif
    /**
     * @return string
     * @alias mysqli_get_server_info
     */
    #[\Until('8.1')]
    public function get_server_info()
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_get_server_info
     */
    #[\Since('8.1')]
    public function get_server_info() : string
    {
    }
    /**
     * @return mysqli_warning|false
     * @alias mysqli_get_warnings
     */
    #[\Until('8.1')]
    public function get_warnings()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_get_warnings
     */
    #[\Since('8.1')]
    public function get_warnings() : mysqli_warning|false
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
     * @return bool
     * @alias mysqli_kill
     */
    #[\Until('8.1')]
    public function kill(int $process_id)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_kill
     */
    #[\Since('8.1')]
    public function kill(int $process_id) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_multi_query
     */
    #[\Until('8.1')]
    public function multi_query(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_multi_query
     */
    #[\Since('8.1')]
    public function multi_query(string $query) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_more_results
     */
    #[\Until('8.1')]
    public function more_results()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_more_results
     */
    #[\Since('8.1')]
    public function more_results() : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_next_result
     */
    #[\Until('8.1')]
    public function next_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_next_result
     */
    #[\Since('8.1')]
    public function next_result() : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_ping
     */
    #[\Until('8.1')]
    public function ping()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_ping
     */
    #[\Since('8.1')]
    public function ping() : bool
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return int|false
     * @alias mysqli_poll
     */
    #[\Until('8.1')]
    public static function poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0)
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_poll
     */
    #[\Since('8.1')]
    public static function poll(?array &$read, ?array &$error, array &$reject, int $seconds, int $microseconds = 0) : int|false
    {
    }
    #endif
    /**
     * @return mysqli_stmt|false
     * @alias mysqli_prepare
     */
    #[\Until('8.1')]
    public function prepare(string $query)
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_prepare
     */
    #[\Since('8.1')]
    public function prepare(string $query) : mysqli_stmt|false
    {
    }
    /**
     * @return mysqli_result|bool
     * @alias mysqli_query
     */
    #[\Until('8.1')]
    public function query(string $query, int $result_mode = MYSQLI_STORE_RESULT)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_query
     */
    #[\Since('8.1')]
    public function query(string $query, int $result_mode = MYSQLI_STORE_RESULT) : mysqli_result|bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_real_connect
     */
    #[\Until('8.1')]
    public function real_connect(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null, int $flags = 0)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_real_connect
     */
    #[\Since('8.1')]
    public function real_connect(?string $hostname = null, ?string $username = null, ?string $password = null, ?string $database = null, ?int $port = null, ?string $socket = null, int $flags = 0) : bool
    {
    }
    /**
     * @return string
     * @alias mysqli_real_escape_string
     */
    #[\Until('8.1')]
    public function real_escape_string(string $string)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_real_escape_string
     */
    #[\Since('8.1')]
    public function real_escape_string(string $string) : string
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return mysqli_result|bool
     * @alias mysqli_reap_async_query
     */
    #[\Until('8.1')]
    public function reap_async_query()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_reap_async_query
     */
    #[\Since('8.1')]
    public function reap_async_query() : mysqli_result|bool
    {
    }
    #endif
    /**
     * @return string
     * @alias mysqli_real_escape_string
     */
    #[\Until('8.1')]
    public function escape_string(string $string)
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_real_escape_string
     */
    #[\Since('8.1')]
    public function escape_string(string $string) : string
    {
    }
    /**
     * @return bool
     * @alias mysqli_real_query
     */
    #[\Until('8.1')]
    public function real_query(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_real_query
     */
    #[\Since('8.1')]
    public function real_query(string $query) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_release_savepoint
     */
    #[\Until('8.1')]
    public function release_savepoint(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_release_savepoint
     */
    #[\Since('8.1')]
    public function release_savepoint(string $name) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_rollback
     */
    #[\Until('8.1')]
    public function rollback(int $flags = 0, ?string $name = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_rollback
     */
    #[\Since('8.1')]
    public function rollback(int $flags = 0, ?string $name = null) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_savepoint
     */
    #[\Until('8.1')]
    public function savepoint(string $name)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_savepoint
     */
    #[\Since('8.1')]
    public function savepoint(string $name) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_select_db
     */
    #[\Until('8.1')]
    public function select_db(string $database)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_select_db
     */
    #[\Since('8.1')]
    public function select_db(string $database) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_set_charset
     */
    #[\Until('8.1')]
    public function set_charset(string $charset)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_set_charset
     */
    #[\Since('8.1')]
    public function set_charset(string $charset) : bool
    {
    }
    /**
     * @param string|int $value
     * @return bool
     * @alias mysqli_options
     */
    #[\Until('8.1')]
    public function options(int $option, $value)
    {
    }
    /**
     * @param string|int $value
     * @tentative-return-type
     * @alias mysqli_options
     */
    #[\Since('8.1')]
    public function options(int $option, $value) : bool
    {
    }
    /**
     * @param string|int $value
     * @return bool
     * @alias mysqli_options
     */
    #[\Until('8.1')]
    public function set_opt(int $option, $value)
    {
    }
    /**
     * @param string|int $value
     * @tentative-return-type
     * @alias mysqli_options
     */
    #[\Since('8.1')]
    public function set_opt(int $option, $value) : bool
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
    /**
     * @return string|false
     * @alias mysqli_stat
     */
    #[\Until('8.1')]
    public function stat()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_stat
     */
    #[\Since('8.1')]
    public function stat() : string|false
    {
    }
    /**
     * @return mysqli_stmt|false
     * @alias mysqli_stmt_init
     */
    #[\Until('8.1')]
    public function stmt_init()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_init
     */
    #[\Since('8.1')]
    public function stmt_init() : mysqli_stmt|false
    {
    }
    /**
     * @return mysqli_result|false
     * @alias mysqli_store_result
     */
    #[\Until('8.1')]
    public function store_result(int $mode = 0)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_store_result
     */
    #[\Since('8.1')]
    public function store_result(int $mode = 0) : mysqli_result|false
    {
    }
    /**
     * @return bool
     * @alias mysqli_thread_safe
     */
    #[\Until('8.1')]
    public function thread_safe()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_thread_safe
     */
    #[\Since('8.1')]
    public function thread_safe() : bool
    {
    }
    /**
     * @return mysqli_result|false
     * @alias mysqli_use_result
     */
    #[\Until('8.1')]
    public function use_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_use_result
     */
    #[\Since('8.1')]
    public function use_result() : mysqli_result|false
    {
    }
    /**
     * @return bool
     * @alias mysqli_refresh
     */
    #[\Until('8.1')]
    public function refresh(int $flags)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_refresh
     */
    #[\Since('8.1')]
    public function refresh(int $flags) : bool
    {
    }
}