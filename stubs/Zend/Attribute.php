<?php 

/** @generate-function-entries */
final class Attribute
{
    public function __construct(int $flags = Attribute::TARGET_ALL)
    {
    }
    /** @cvalue ZEND_ATTRIBUTE_TARGET_CLASS */
    #[\Since('8.2')]
    const int TARGET_CLASS = UNKNOWN;
    /** @cvalue ZEND_ATTRIBUTE_TARGET_FUNCTION */
    #[\Since('8.2')]
    const int TARGET_FUNCTION = UNKNOWN;
    /** @cvalue ZEND_ATTRIBUTE_TARGET_METHOD */
    #[\Since('8.2')]
    const int TARGET_METHOD = UNKNOWN;
    /** @cvalue ZEND_ATTRIBUTE_TARGET_PROPERTY */
    #[\Since('8.2')]
    const int TARGET_PROPERTY = UNKNOWN;
    /** @cvalue ZEND_ATTRIBUTE_TARGET_CLASS_CONST */
    #[\Since('8.2')]
    const int TARGET_CLASS_CONSTANT = UNKNOWN;
    /** @cvalue ZEND_ATTRIBUTE_TARGET_PARAMETER */
    #[\Since('8.2')]
    const int TARGET_PARAMETER = UNKNOWN;
    /** @cvalue ZEND_ATTRIBUTE_TARGET_ALL */
    #[\Since('8.2')]
    const int TARGET_ALL = UNKNOWN;
    /**  @cvalue ZEND_ATTRIBUTE_IS_REPEATABLE */
    #[\Since('8.2')]
    const int IS_REPEATABLE = UNKNOWN;
}