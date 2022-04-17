<?php 

/** @generate-class-entries */
class php_user_filter
{
    /**
     * @param resource $in
     * @param resource $out
     * @param int $consumed
     * @return int
     */
    #[\Until('8.1')]
    public function filter($in, $out, &$consumed, bool $closing)
    {
    }
    /**
     * @param resource $in
     * @param resource $out
     * @param int $consumed
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function filter($in, $out, &$consumed, bool $closing) : int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function onCreate()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function onCreate() : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function onClose()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function onClose() : void
    {
    }
}