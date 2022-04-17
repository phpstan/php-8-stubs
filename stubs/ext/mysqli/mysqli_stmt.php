<?php 

class mysqli_stmt
{
    public function __construct(mysqli $mysql, ?string $query = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_attr_get
     */
    public function attr_get(int $attribute)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_attr_set
     */
    public function attr_set(int $attribute, int $value)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_bind_param
     */
    public function bind_param(string $types, mixed &...$vars)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_bind_result
     */
    public function bind_result(mixed &...$vars)
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
    // TODO make return type void
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_data_seek
     */
    public function data_seek(int $offset)
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
    public function execute(?array $params = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_fetch
     */
    public function fetch()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_get_warnings
     */
    public function get_warnings()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_result_metadata
     */
    public function result_metadata()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_more_results
     */
    public function more_results()
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_next_result
     */
    public function next_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_num_rows
     */
    public function num_rows()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_send_long_data
     */
    public function send_long_data(int $param_num, string $data)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_free_result
     */
    public function free_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_reset
     */
    public function reset()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_prepare
     */
    public function prepare(string $query)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_store_result
     */
    public function store_result()
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @tentative-return-type
     * @alias mysqli_stmt_get_result
     */
    public function get_result()
    {
    }
}