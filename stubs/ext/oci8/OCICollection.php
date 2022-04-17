<?php 

class OCICollection
{
    /**
     * @alias oci_free_collection
     * @tentative-return-type
     */
    public function free()
    {
    }
    /**
     * @alias oci_collection_append
     * @tentative-return-type
     */
    public function append(string $value)
    {
    }
    /**
     * @alias oci_collection_element_get
     * @tentative-return-type
     */
    public function getElem(int $index)
    {
    }
    /**
     * @alias oci_collection_assign
     * @tentative-return-type
     */
    public function assign(OCICollection $from)
    {
    }
    /**
     * @alias oci_collection_element_assign
     * @tentative-return-type
     */
    public function assignElem(int $index, string $value)
    {
    }
    /**
     * @alias oci_collection_size
     * @tentative-return-type
     */
    public function size()
    {
    }
    /**
     * @alias oci_collection_max
     * @tentative-return-type
     */
    public function max()
    {
    }
    /**
     * @alias oci_collection_trim
     * @tentative-return-type
     */
    public function trim(int $num)
    {
    }
}