<?php 

class tidy
{
    public function __construct(?string $filename = null, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_getopt
     */
    public function getOpt(string $option)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_clean_repair
     */
    public function cleanRepair()
    {
    }
    /** @tentative-return-type */
    public function parseFile(string $filename, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false)
    {
    }
    /** @tentative-return-type */
    public function parseString(string $string, array|string|null $config = null, ?string $encoding = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_repair_string
     */
    public static function repairString(string $string, array|string|null $config = null, ?string $encoding = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_repair_file
     */
    public static function repairFile(string $filename, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_diagnose
     */
    public function diagnose()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_release
     */
    public function getRelease()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_config
     */
    public function getConfig()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_status
     */
    public function getStatus()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_html_ver
     */
    public function getHtmlVer()
    {
    }
    #ifdef HAVE_TIDYOPTGETDOC
    /**
     * @tentative-return-type
     * @alias tidy_get_opt_doc
     */
    public function getOptDoc(string $option)
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias tidy_is_xhtml
     */
    public function isXhtml()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_is_xml
     */
    public function isXml()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_root
     */
    public function root()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_head
     */
    public function head()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_html
     */
    public function html()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_body
     */
    public function body()
    {
    }
}