<?php 

class Phar extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess
{
    public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null)
    {
    }
    public function __destruct()
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function addEmptyDir(string $directory)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addEmptyDir(string $directory) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function addFile(string $filename, ?string $localName = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addFile(string $filename, ?string $localName = null) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function addFromString(string $localName, string $contents)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addFromString(string $localName, string $contents) : void
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function buildFromDirectory(string $directory, string $pattern = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function buildFromDirectory(string $directory, string $pattern = "") : array
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function buildFromIterator(Traversable $iterator, ?string $baseDirectory = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function buildFromIterator(Traversable $iterator, ?string $baseDirectory = null) : array
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function compressFiles(int $compression)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function compressFiles(int $compression) : void
    {
    }
    /** @return bool */
    public function decompressFiles()
    {
    }
    /** @return Phar|null */
    #[\Until('8.1')]
    public function compress(int $compression, ?string $extension = null)
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function compress(int $compression, ?string $extension = null) : ?Phar
    {
    }
    /** @return Phar|null */
    #[\Until('8.1')]
    public function decompress(?string $extension = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function decompress(?string $extension = null) : ?Phar
    {
    }
    /** @return Phar|null */
    #[\Until('8.1')]
    public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null) : ?Phar
    {
    }
    /** @return PharData|null */
    #[\Until('8.1')]
    public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null) : ?PharData
    {
    }
    /** @return bool */
    public function copy(string $from, string $to)
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count(int $mode = COUNT_NORMAL) : int
    {
    }
    /** @return bool */
    public function delete(string $localName)
    {
    }
    // TODO make return type void
    /** @return bool */
    public function delMetadata()
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false)
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false) : bool
    {
    }
    /** @return string|null */
    #[\Until('8.1')]
    public function getAlias()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getAlias() : ?string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getPath()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPath() : string
    {
    }
    /** @return mixed */
    #[\Until('8.1')]
    public function getMetadata(array $unserializeOptions = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMetadata(array $unserializeOptions = []) : mixed
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function getModified()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getModified() : bool
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function getSignature()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSignature() : array|false
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getStub()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStub() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getVersion()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getVersion() : string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function hasMetadata()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function hasMetadata() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isBuffering()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isBuffering() : bool
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function isCompressed()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isCompressed() : int|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isFileFormat(int $format)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isFileFormat(int $format) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isWritable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isWritable() : bool
    {
    }
    /**
     * @param string $localName
     * @return bool
     */
    #[\Until('8.1')]
    public function offsetExists($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetExists($localName) : bool
    {
    }
    /**
     * @param string $localName
     * @return PharFileInfo
     */
    #[\Until('8.1')]
    public function offsetGet($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetGet($localName) : SplFileInfo
    {
    }
    /**
     * @param string $localName
     * @param resource|string $value
     * @return void
     */
    #[\Until('8.1')]
    public function offsetSet($localName, $value)
    {
    }
    /**
     * @param string $localName
     * @param resource|string $value
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetSet($localName, $value) : void
    {
    }
    /**
     * @param string $localName
     * @return bool
     */
    #[\Until('8.1')]
    public function offsetUnset($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function offsetUnset($localName) : void
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setAlias(string $alias)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setAlias(string $alias) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setDefaultStub(?string $index = null, ?string $webIndex = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setDefaultStub(?string $index = null, ?string $webIndex = null) : bool
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setMetadata(mixed $metadata)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMetadata(mixed $metadata) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setSignatureAlgorithm(int $algo, ?string $privateKey = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setSignatureAlgorithm(int $algo, ?string $privateKey = null) : void
    {
    }
    /**
     * @param resource|string $stub
     * @return bool
     */
    public function setStub($stub, int $length = UNKNOWN)
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function startBuffering()
    {
    }
    // TODO make return type void
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function startBuffering() : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function stopBuffering()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function stopBuffering() : void
    {
    }
    public static final function apiVersion() : string
    {
    }
    public static final function canCompress(int $compression = 0) : bool
    {
    }
    public static final function canWrite() : bool
    {
    }
    public static final function createDefaultStub(?string $index = null, ?string $webIndex = null) : string
    {
    }
    public static final function getSupportedCompression() : array
    {
    }
    public static final function getSupportedSignatures() : array
    {
    }
    public static final function interceptFileFuncs() : void
    {
    }
    public static final function isValidPharFilename(string $filename, bool $executable = true) : bool
    {
    }
    public static final function loadPhar(string $filename, ?string $alias = null) : bool
    {
    }
    public static final function mapPhar(?string $alias = null, int $offset = 0) : bool
    {
    }
    public static final function running(bool $returnPhar = true) : string
    {
    }
    public static final function mount(string $pharPath, string $externalPath) : void
    {
    }
    public static final function mungServer(array $variables) : void
    {
    }
    public static final function unlinkArchive(string $filename) : bool
    {
    }
    // TODO make return type void
    public static final function webPhar(?string $alias = null, ?string $index = null, ?string $fileNotFoundScript = null, array $mimeTypes = [], ?callable $rewrite = null) : void
    {
    }
}