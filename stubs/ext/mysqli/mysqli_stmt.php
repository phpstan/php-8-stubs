<?php 

class mysqli_stmt
{
    public function __construct(mysqli $mysql, ?string $query = null)
    {
    }
    /**
     * @return int
     * @alias mysqli_stmt_attr_get
     */
    #[\Until('8.1')]
    public function attr_get(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_attr_get
     */
    #[\Since('8.1')]
    public function attr_get(int $attribute) : int
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_attr_set
     */
    #[\Until('8.1')]
    public function attr_set(int $attribute, int $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_attr_set
     */
    #[\Since('8.1')]
    public function attr_set(int $attribute, int $value) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_bind_param
     */
    #[\Until('8.1')]
    public function bind_param(string $types, mixed &...$vars)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_bind_param
     */
    #[\Since('8.1')]
    public function bind_param(string $types, mixed &...$vars) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_bind_result
     */
    #[\Until('8.1')]
    public function bind_result(mixed &...$vars)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_bind_result
     */
    #[\Since('8.1')]
    public function bind_result(mixed &...$vars) : bool
    {
    }
    /**
     * @return true
     * @alias mysqli_stmt_close
     * @no-verify
     */
    public function close()
    {
    }
    /**
     * @return void
     * @alias mysqli_stmt_data_seek
     */
    #[\Until('8.1')]
    public function data_seek(int $offset)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_data_seek
     */
    #[\Since('8.1')]
    public function data_seek(int $offset) : void
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_execute
     */
    #[\Until('8.1')]
    public function execute()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_execute
     */
    #[\Since('8.1')]
    public function execute(?array $params = null) : bool
    {
    }
    /**
     * @return bool|null
     * @alias mysqli_stmt_fetch
     */
    #[\Until('8.1')]
    public function fetch()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_fetch
     */
    #[\Since('8.1')]
    public function fetch() : ?bool
    {
    }
    /**
     * @return mysqli_warning|false
     * @alias mysqli_stmt_get_warnings
     */
    #[\Until('8.1')]
    public function get_warnings()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_get_warnings
     */
    #[\Since('8.1')]
    public function get_warnings() : mysqli_warning|false
    {
    }
    /**
     * @return mysqli_result|false
     * @alias mysqli_stmt_result_metadata
     */
    #[\Until('8.1')]
    public function result_metadata()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_result_metadata
     */
    #[\Since('8.1')]
    public function result_metadata() : mysqli_result|false
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return bool
     * @alias mysqli_stmt_more_results
     */
    #[\Until('8.1')]
    public function more_results()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_more_results
     */
    #[\Since('8.1')]
    public function more_results() : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_next_result
     */
    #[\Until('8.1')]
    public function next_result()
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_next_result
     */
    #[\Since('8.1')]
    public function next_result() : bool
    {
    }
    #endif
    /**
     * @return int|string
     * @alias mysqli_stmt_num_rows
     */
    #[\Until('8.1')]
    public function num_rows()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_num_rows
     */
    #[\Since('8.1')]
    public function num_rows() : int|string
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_send_long_data
     */
    #[\Until('8.1')]
    public function send_long_data(int $param_num, string $data)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_send_long_data
     */
    #[\Since('8.1')]
    public function send_long_data(int $param_num, string $data) : bool
    {
    }
    /**
     * @return void
     * @alias mysqli_stmt_free_result
     */
    #[\Until('8.1')]
    public function free_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_free_result
     */
    #[\Since('8.1')]
    public function free_result() : void
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_reset
     */
    #[\Until('8.1')]
    public function reset()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_reset
     */
    #[\Since('8.1')]
    public function reset() : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_prepare
     */
    #[\Until('8.1')]
    public function prepare(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_prepare
     */
    #[\Since('8.1')]
    public function prepare(string $query) : bool
    {
    }
    /**
     * @return bool
     * @alias mysqli_stmt_store_result
     */
    #[\Until('8.1')]
    public function store_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_store_result
     */
    #[\Since('8.1')]
    public function store_result() : bool
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return mysqli_result|false
     * @alias mysqli_stmt_get_result
     */
    #[\Until('8.1')]
    public function get_result()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_get_result
     */
    #[\Since('8.1')]
    public function get_result() : mysqli_result|false
    {
    }
}