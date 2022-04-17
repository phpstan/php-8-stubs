<?php 

class mysqli_result implements \IteratorAggregate
{
    public function __construct(mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT)
    {
    }
    /**
     * @return void
     * @alias mysqli_free_result
     */
    #[\Until('8.1')]
    public function close()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_free_result
     */
    #[\Since('8.1')]
    public function close() : void
    {
    }
    /**
     * @return void
     * @alias mysqli_free_result
     */
    #[\Until('8.1')]
    public function free()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_free_result
     */
    #[\Since('8.1')]
    public function free() : void
    {
    }
    /**
     * @return bool
     * @alias mysqli_data_seek
     */
    #[\Until('8.1')]
    public function data_seek(int $offset)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_data_seek
     */
    #[\Since('8.1')]
    public function data_seek(int $offset) : bool
    {
    }
    /**
     * @return object|false
     * @alias mysqli_fetch_field
     */
    #[\Until('8.1')]
    public function fetch_field()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_fetch_field
     */
    #[\Since('8.1')]
    public function fetch_field() : object|false
    {
    }
    /**
     * @return array
     * @alias mysqli_fetch_fields
     */
    #[\Until('8.1')]
    public function fetch_fields()
    {
    }
    /**
     * @return array<int, object>
     * @tentative-return-type
     * @alias mysqli_fetch_fields
     */
    #[\Since('8.1')]
    public function fetch_fields() : array
    {
    }
    /**
     * @return object|false
     * @alias mysqli_fetch_field_direct
     */
    #[\Until('8.1')]
    public function fetch_field_direct(int $index)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_fetch_field_direct
     */
    #[\Since('8.1')]
    public function fetch_field_direct(int $index) : object|false
    {
    }
    #if defined(MYSQLI_USE_MYSQLND)
    /**
     * @return array
     * @alias mysqli_fetch_all
     */
    #[\Until('8.1')]
    public function fetch_all(int $mode = MYSQLI_NUM)
    {
    }
    /**
     * @return array<int|string, mixed>
     * @tentative-return-type
     * @alias mysqli_fetch_all
     */
    #[\Since('8.1')]
    public function fetch_all(int $mode = MYSQLI_NUM) : array
    {
    }
    #endif
    /**
     * @return array|null|false
     * @alias mysqli_fetch_array
     */
    #[\Until('8.1')]
    public function fetch_array(int $mode = MYSQLI_BOTH)
    {
    }
    /**
     * @return array<int|string, mixed>|null|false
     * @tentative-return-type
     * @alias mysqli_fetch_array
     */
    #[\Since('8.1')]
    public function fetch_array(int $mode = MYSQLI_BOTH) : array|null|false
    {
    }
    /**
     * @return array|null|false
     * @alias mysqli_fetch_assoc
     */
    #[\Until('8.1')]
    public function fetch_assoc()
    {
    }
    /**
     * @return array<int|string, mixed>|null|false
     * @tentative-return-type
     * @alias mysqli_fetch_assoc
     */
    #[\Since('8.1')]
    public function fetch_assoc() : array|null|false
    {
    }
    /**
     * @return object|null|false
     * @alias mysqli_fetch_object
     */
    #[\Until('8.1')]
    public function fetch_object(string $class = "stdClass", array $constructor_args = [])
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_fetch_object
     */
    #[\Since('8.1')]
    public function fetch_object(string $class = "stdClass", array $constructor_args = []) : object|null|false
    {
    }
    /**
     * @return array|null|false
     * @alias mysqli_fetch_row
     */
    #[\Until('8.1')]
    public function fetch_row()
    {
    }
    /**
     * @return array<int, mixed>|null|false
     * @tentative-return-type
     * @alias mysqli_fetch_row
     */
    #[\Since('8.1')]
    public function fetch_row() : array|null|false
    {
    }
    /**
     * @return bool
     * @alias mysqli_field_seek
     */
    #[\Until('8.1')]
    public function field_seek(int $index)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_field_seek
     */
    #[\Since('8.1')]
    public function field_seek(int $index) : bool
    {
    }
    /**
     * @return void
     * @alias mysqli_free_result
     */
    #[\Until('8.1')]
    public function free_result()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_free_result
     */
    #[\Since('8.1')]
    public function free_result() : void
    {
    }
    public function getIterator() : Iterator
    {
    }
}