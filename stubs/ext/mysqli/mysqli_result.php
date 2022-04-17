<?php 

class mysqli_result implements \IteratorAggregate
{
    public function __construct(mysqli $mysql, int $result_mode = MYSQLI_STORE_RESULT)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_free_result
     */
    public function close()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_free_result
     */
    public function free()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_data_seek
     */
    public function data_seek(int $offset)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_fetch_field
     */
    public function fetch_field()
    {
    }
    /**
     * @return array<int, object>
     * @tentative-return-type
     * @alias mysqli_fetch_fields
     */
    public function fetch_fields()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_fetch_field_direct
     */
    public function fetch_field_direct(int $index)
    {
    }
    /**
     * @return array<int|string, mixed>
     * @tentative-return-type
     * @alias mysqli_fetch_all
     */
    public function fetch_all(int $mode = MYSQLI_NUM)
    {
    }
    /**
     * @return array<int|string, mixed>|null|false
     * @tentative-return-type
     * @alias mysqli_fetch_array
     */
    public function fetch_array(int $mode = MYSQLI_BOTH)
    {
    }
    /**
     * @return array<int|string, mixed>|null|false
     * @tentative-return-type
     * @alias mysqli_fetch_assoc
     */
    public function fetch_assoc()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_fetch_object
     */
    public function fetch_object(string $class = "stdClass", array $constructor_args = [])
    {
    }
    /**
     * @return array<int, mixed>|null|false
     * @tentative-return-type
     * @alias mysqli_fetch_row
     */
    public function fetch_row()
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_field_seek
     */
    public function field_seek(int $index)
    {
    }
    /**
     * @tentative-return-type
     * @alias mysqli_free_result
     */
    public function free_result()
    {
    }
    public function getIterator() : Iterator
    {
    }
}