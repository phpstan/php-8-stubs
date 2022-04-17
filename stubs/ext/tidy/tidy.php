<?php 

class tidy
{
    public function __construct(?string $filename = null, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false)
    {
    }
    /**
     * @return string|int|bool
     * @alias tidy_getopt
     */
    #[\Until('8.1')]
    public function getOpt(string $option)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_getopt
     */
    #[\Since('8.1')]
    public function getOpt(string $option) : string|int|bool
    {
    }
    /**
     * @return bool
     * @alias tidy_clean_repair
     */
    #[\Until('8.1')]
    public function cleanRepair()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_clean_repair
     */
    #[\Since('8.1')]
    public function cleanRepair() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function parseFile(string $filename, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function parseFile(string $filename, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function parseString(string $string, array|string|null $config = null, ?string $encoding = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function parseString(string $string, array|string|null $config = null, ?string $encoding = null) : bool
    {
    }
    /**
     * @return string|false
     * @alias tidy_repair_string
     */
    #[\Until('8.1')]
    public static function repairString(string $string, array|string|null $config = null, ?string $encoding = null)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_repair_string
     */
    #[\Since('8.1')]
    public static function repairString(string $string, array|string|null $config = null, ?string $encoding = null) : string|false
    {
    }
    /**
     * @return string|false
     * @alias tidy_repair_file
     */
    #[\Until('8.1')]
    public static function repairFile(string $filename, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false)
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_repair_file
     */
    #[\Since('8.1')]
    public static function repairFile(string $filename, array|string|null $config = null, ?string $encoding = null, bool $useIncludePath = false) : string|false
    {
    }
    /**
     * @return bool
     * @alias tidy_diagnose
     */
    #[\Until('8.1')]
    public function diagnose()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_diagnose
     */
    #[\Since('8.1')]
    public function diagnose() : bool
    {
    }
    /**
     * @return string
     * @alias tidy_get_release
     */
    #[\Until('8.1')]
    public function getRelease()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_release
     */
    #[\Since('8.1')]
    public function getRelease() : string
    {
    }
    /**
     * @return array
     * @alias tidy_get_config
     */
    #[\Until('8.1')]
    public function getConfig()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_config
     */
    #[\Since('8.1')]
    public function getConfig() : array
    {
    }
    /**
     * @return int
     * @alias tidy_get_status
     */
    #[\Until('8.1')]
    public function getStatus()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_status
     */
    #[\Since('8.1')]
    public function getStatus() : int
    {
    }
    /**
     * @return int
     * @alias tidy_get_html_ver
     */
    #[\Until('8.1')]
    public function getHtmlVer()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_html_ver
     */
    #[\Since('8.1')]
    public function getHtmlVer() : int
    {
    }
    #ifdef HAVE_TIDYOPTGETDOC
    /**
     * @return string|false
     * @alias tidy_get_opt_doc
     */
    #[\Until('8.1')]
    public function getOptDoc(string $option)
    {
    }
    #ifdef HAVE_TIDYOPTGETDOC
    /**
     * @tentative-return-type
     * @alias tidy_get_opt_doc
     */
    #[\Since('8.1')]
    public function getOptDoc(string $option) : string|false
    {
    }
    #endif
    /**
     * @return bool
     * @alias tidy_is_xhtml
     */
    #[\Until('8.1')]
    public function isXhtml()
    {
    }
    #endif
    /**
     * @tentative-return-type
     * @alias tidy_is_xhtml
     */
    #[\Since('8.1')]
    public function isXhtml() : bool
    {
    }
    /**
     * @return bool
     * @alias tidy_is_xml
     */
    #[\Until('8.1')]
    public function isXml()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_is_xml
     */
    #[\Since('8.1')]
    public function isXml() : bool
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_root
     */
    #[\Until('8.1')]
    public function root()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_root
     */
    #[\Since('8.1')]
    public function root() : ?tidyNode
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_head
     */
    #[\Until('8.1')]
    public function head()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_head
     */
    #[\Since('8.1')]
    public function head() : ?tidyNode
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_html
     */
    #[\Until('8.1')]
    public function html()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_html
     */
    #[\Since('8.1')]
    public function html() : ?tidyNode
    {
    }
    /**
     * @return tidyNode|null
     * @alias tidy_get_body
     */
    #[\Until('8.1')]
    public function body()
    {
    }
    /**
     * @tentative-return-type
     * @alias tidy_get_body
     */
    #[\Since('8.1')]
    public function body() : ?tidyNode
    {
    }
}