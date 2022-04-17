<?php 

class OCICollection
{
    /**
     * @alias oci_free_collection
     * @return bool
     */
    #[\Until('8.1')]
    public function free()
    {
    }
    /**
     * @alias oci_free_collection
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function free() : bool
    {
    }
    /**
     * @alias oci_collection_append
     * @return bool
     */
    #[\Until('8.1')]
    public function append(string $value)
    {
    }
    /**
     * @alias oci_collection_append
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function append(string $value) : bool
    {
    }
    /**
     * @alias oci_collection_element_get
     * @return string|float|null|false
     */
    #[\Until('8.1')]
    public function getElem(int $index)
    {
    }
    /**
     * @alias oci_collection_element_get
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function getElem(int $index) : string|float|null|false
    {
    }
    /**
     * @alias oci_collection_assign
     * @return bool
     */
    #[\Until('8.1')]
    public function assign(OCICollection $from)
    {
    }
    /**
     * @alias oci_collection_assign
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function assign(OCICollection $from) : bool
    {
    }
    /**
     * @alias oci_collection_element_assign
     * @return bool
     */
    #[\Until('8.1')]
    public function assignElem(int $index, string $value)
    {
    }
    /**
     * @alias oci_collection_element_assign
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function assignElem(int $index, string $value) : bool
    {
    }
    /**
     * @alias oci_collection_size
     * @return int|false
     */
    #[\Until('8.1')]
    public function size()
    {
    }
    /**
     * @alias oci_collection_size
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function size() : int|false
    {
    }
    /**
     * @alias oci_collection_max
     * @return int|false
     */
    #[\Until('8.1')]
    public function max()
    {
    }
    /**
     * @alias oci_collection_max
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function max() : int|false
    {
    }
    /**
     * @alias oci_collection_trim
     * @return bool
     */
    #[\Until('8.1')]
    public function trim(int $num)
    {
    }
    /**
     * @alias oci_collection_trim
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function trim(int $num) : bool
    {
    }
}