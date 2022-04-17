<?php 

/** @generate-class-entries */
class Spoofchecker
{
    public function __construct()
    {
    }
    /**
     * @param int $errorCode
     * @return bool
     */
    #[\Until('8.1')]
    public function isSuspicious(string $string, &$errorCode = null)
    {
    }
    /**
     * @param int $errorCode
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function isSuspicious(string $string, &$errorCode = null) : bool
    {
    }
    /**
     * @param int $errorCode
     * @return bool
     */
    #[\Until('8.1')]
    public function areConfusable(string $string1, string $string2, &$errorCode = null)
    {
    }
    /**
     * @param int $errorCode
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function areConfusable(string $string1, string $string2, &$errorCode = null) : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setAllowedLocales(string $locales)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setAllowedLocales(string $locales) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setChecks(int $checks)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setChecks(int $checks) : void
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 58
    /** @return void */
    #[\Until('8.1')]
    public function setRestrictionLevel(int $level)
    {
    }
    #if U_ICU_VERSION_MAJOR_NUM >= 58
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setRestrictionLevel(int $level) : void
    {
    }
}