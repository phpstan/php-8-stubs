<?php 

class PharData extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess
{
    /**
     * @implementation-alias Phar::__construct
     * @no-verify PharData constructor accepts extra $format argument
     */
    public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null, int $format = 0)
    {
    }
    /** @implementation-alias Phar::__destruct */
    public function __destruct()
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::addEmptyDir
     */
    #[\Until('8.1')]
    public function addEmptyDir(string $directory)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::addEmptyDir
     */
    #[\Since('8.1')]
    public function addEmptyDir(string $directory) : void
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::addFile
     */
    #[\Until('8.1')]
    public function addFile(string $filename, ?string $localName = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::addFile
     */
    #[\Since('8.1')]
    public function addFile(string $filename, ?string $localName = null) : void
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::addFromString
     */
    #[\Until('8.1')]
    public function addFromString(string $localName, string $contents)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::addFromString
     */
    #[\Since('8.1')]
    public function addFromString(string $localName, string $contents) : void
    {
    }
    /**
     * @return array|false
     * @implementation-alias Phar::buildFromDirectory
     */
    #[\Until('8.1')]
    public function buildFromDirectory(string $directory, string $pattern = "")
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::buildFromDirectory
     */
    #[\Since('8.1')]
    public function buildFromDirectory(string $directory, string $pattern = "") : array
    {
    }
    /**
     * @return array|false
     * @implementation-alias Phar::buildFromIterator
     */
    #[\Until('8.1')]
    public function buildFromIterator(Traversable $iterator, ?string $baseDirectory = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::buildFromIterator
     */
    #[\Since('8.1')]
    public function buildFromIterator(Traversable $iterator, ?string $baseDirectory = null) : array
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::compressFiles
     */
    #[\Until('8.1')]
    public function compressFiles(int $compression)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::compressFiles
     */
    #[\Since('8.1')]
    public function compressFiles(int $compression) : void
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::decompressFiles
     */
    public function decompressFiles()
    {
    }
    /**
     * @return PharData|null
     * @implementation-alias Phar::compress
     * @no-verify
     */
    #[\Until('8.1')]
    public function compress(int $compression, ?string $extension = null)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::compress
     * @no-verify
     */
    #[\Since('8.1')]
    public function compress(int $compression, ?string $extension = null) : ?PharData
    {
    }
    /**
     * @return PharData|null
     * @implementation-alias Phar::decompress
     * @no-verify
     */
    #[\Until('8.1')]
    public function decompress(?string $extension = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::decompress
     * @no-verify
     */
    #[\Since('8.1')]
    public function decompress(?string $extension = null) : ?PharData
    {
    }
    /**
     * @return Phar|null
     * @implementation-alias Phar::convertToExecutable
     */
    #[\Until('8.1')]
    public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::convertToExecutable
     */
    #[\Since('8.1')]
    public function convertToExecutable(?int $format = null, ?int $compression = null, ?string $extension = null) : ?Phar
    {
    }
    /**
     * @return PharData|null
     * @implementation-alias Phar::convertToData
     */
    #[\Until('8.1')]
    public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::convertToData
     */
    #[\Since('8.1')]
    public function convertToData(?int $format = null, ?int $compression = null, ?string $extension = null) : ?PharData
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::copy
     */
    public function copy(string $from, string $to)
    {
    }
    /**
     * @return int
     * @implementation-alias Phar::count
     */
    #[\Until('8.1')]
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::count
     */
    #[\Since('8.1')]
    public function count(int $mode = COUNT_NORMAL) : int
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::delete
     */
    public function delete(string $localName)
    {
    }
    // TODO make return type void
    /**
     * @return bool
     * @implementation-alias Phar::delMetadata
     */
    public function delMetadata()
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::extractTo
     */
    #[\Until('8.1')]
    public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false)
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::extractTo
     */
    #[\Since('8.1')]
    public function extractTo(string $directory, array|string|null $files = null, bool $overwrite = false) : bool
    {
    }
    /**
     * @return string|null
     * @implementation-alias Phar::getAlias
     */
    #[\Until('8.1')]
    public function getAlias()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getAlias
     */
    #[\Since('8.1')]
    public function getAlias() : ?string
    {
    }
    /**
     * @return string
     * @implementation-alias Phar::getPath
     */
    #[\Until('8.1')]
    public function getPath()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getPath
     */
    #[\Since('8.1')]
    public function getPath() : string
    {
    }
    /**
     * @return mixed
     * @implementation-alias Phar::getMetadata
     */
    #[\Until('8.1')]
    public function getMetadata(array $unserializeOptions = [])
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getMetadata
     */
    #[\Since('8.1')]
    public function getMetadata(array $unserializeOptions = []) : mixed
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::getModified
     */
    #[\Until('8.1')]
    public function getModified()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getModified
     */
    #[\Since('8.1')]
    public function getModified() : bool
    {
    }
    /**
     * @return array|false
     * @implementation-alias Phar::getSignature
     */
    #[\Until('8.1')]
    public function getSignature()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getSignature
     */
    #[\Since('8.1')]
    public function getSignature() : array|false
    {
    }
    /**
     * @return string
     * @implementation-alias Phar::getStub
     */
    #[\Until('8.1')]
    public function getStub()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getStub
     */
    #[\Since('8.1')]
    public function getStub() : string
    {
    }
    /**
     * @return string
     * @implementation-alias Phar::getVersion
     */
    #[\Until('8.1')]
    public function getVersion()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::getVersion
     */
    #[\Since('8.1')]
    public function getVersion() : string
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::hasMetadata
     */
    #[\Until('8.1')]
    public function hasMetadata()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::hasMetadata
     */
    #[\Since('8.1')]
    public function hasMetadata() : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::isBuffering
     */
    #[\Until('8.1')]
    public function isBuffering()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isBuffering
     */
    #[\Since('8.1')]
    public function isBuffering() : bool
    {
    }
    /**
     * @return int|false
     * @implementation-alias Phar::isCompressed
     */
    #[\Until('8.1')]
    public function isCompressed()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isCompressed
     */
    #[\Since('8.1')]
    public function isCompressed() : int|false
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::isFileFormat
     */
    #[\Until('8.1')]
    public function isFileFormat(int $format)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isFileFormat
     */
    #[\Since('8.1')]
    public function isFileFormat(int $format) : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::isWritable
     */
    #[\Until('8.1')]
    public function isWritable()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::isWritable
     */
    #[\Since('8.1')]
    public function isWritable() : bool
    {
    }
    /**
     * @param string $localName
     * @return bool
     * @implementation-alias Phar::offsetExists
     */
    #[\Until('8.1')]
    public function offsetExists($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     * @implementation-alias Phar::offsetExists
     */
    #[\Since('8.1')]
    public function offsetExists($localName) : bool
    {
    }
    /**
     * @param string $localName
     * @return PharFileInfo
     * @implementation-alias Phar::offsetGet
     */
    #[\Until('8.1')]
    public function offsetGet($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     * @implementation-alias Phar::offsetGet
     */
    #[\Since('8.1')]
    public function offsetGet($localName) : SplFileInfo
    {
    }
    /**
     * @param string $localName
     * @param resource|string $value
     * @return void
     * @implementation-alias Phar::offsetSet
     */
    #[\Until('8.1')]
    public function offsetSet($localName, $value)
    {
    }
    /**
     * @param string $localName
     * @param resource|string $value
     * @tentative-return-type
     * @implementation-alias Phar::offsetSet
     */
    #[\Since('8.1')]
    public function offsetSet($localName, $value) : void
    {
    }
    /**
     * @param string $localName
     * @return bool
     * @implementation-alias Phar::offsetUnset
     */
    #[\Until('8.1')]
    public function offsetUnset($localName)
    {
    }
    /**
     * @param string $localName
     * @tentative-return-type
     * @implementation-alias Phar::offsetUnset
     */
    #[\Since('8.1')]
    public function offsetUnset($localName) : void
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::setAlias
     */
    #[\Until('8.1')]
    public function setAlias(string $alias)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setAlias
     */
    #[\Since('8.1')]
    public function setAlias(string $alias) : bool
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::setDefaultStub
     */
    #[\Until('8.1')]
    public function setDefaultStub(?string $index = null, ?string $webIndex = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setDefaultStub
     */
    #[\Since('8.1')]
    public function setDefaultStub(?string $index = null, ?string $webIndex = null) : bool
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::setMetadata
     */
    #[\Until('8.1')]
    public function setMetadata(mixed $metadata)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setMetadata
     */
    #[\Since('8.1')]
    public function setMetadata(mixed $metadata) : void
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::setSignatureAlgorithm
     */
    #[\Until('8.1')]
    public function setSignatureAlgorithm(int $algo, ?string $privateKey = null)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::setSignatureAlgorithm
     */
    #[\Since('8.1')]
    public function setSignatureAlgorithm(int $algo, ?string $privateKey = null) : void
    {
    }
    /**
     * @param resource|string $stub
     * @return bool
     * @implementation-alias Phar::setStub
     */
    public function setStub($stub, int $length = UNKNOWN)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::startBuffering
     */
    #[\Until('8.1')]
    public function startBuffering()
    {
    }
    // TODO make return type void
    /**
     * @tentative-return-type
     * @implementation-alias Phar::startBuffering
     */
    #[\Since('8.1')]
    public function startBuffering() : void
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::stopBuffering
     */
    #[\Until('8.1')]
    public function stopBuffering()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias Phar::stopBuffering
     */
    #[\Since('8.1')]
    public function stopBuffering() : void
    {
    }
    /** @implementation-alias Phar::apiVersion */
    public static final function apiVersion() : string
    {
    }
    /** @implementation-alias Phar::canCompress */
    public static final function canCompress(int $compression = 0) : bool
    {
    }
    /** @implementation-alias Phar::canWrite */
    public static final function canWrite() : bool
    {
    }
    /** @implementation-alias Phar::createDefaultStub */
    public static final function createDefaultStub(?string $index = null, ?string $webIndex = null) : string
    {
    }
    /** @implementation-alias Phar::getSupportedCompression */
    public static final function getSupportedCompression() : array
    {
    }
    /** @implementation-alias Phar::getSupportedSignatures */
    public static final function getSupportedSignatures() : array
    {
    }
    /** @implementation-alias Phar::interceptFileFuncs */
    public static final function interceptFileFuncs() : void
    {
    }
    /** @implementation-alias Phar::isValidPharFilename */
    public static final function isValidPharFilename(string $filename, bool $executable = true) : bool
    {
    }
    /** @implementation-alias Phar::loadPhar */
    public static final function loadPhar(string $filename, ?string $alias = null) : bool
    {
    }
    /** @implementation-alias Phar::mapPhar */
    public static final function mapPhar(?string $alias = null, int $offset = 0) : bool
    {
    }
    /** @implementation-alias Phar::running */
    public static final function running(bool $returnPhar = true) : string
    {
    }
    /** @implementation-alias Phar::mount */
    public static final function mount(string $pharPath, string $externalPath) : void
    {
    }
    /** @implementation-alias Phar::mungServer */
    public static final function mungServer(array $variables) : void
    {
    }
    /** @implementation-alias Phar::unlinkArchive */
    public static final function unlinkArchive(string $filename) : bool
    {
    }
    // TODO make return type void
    /** @implementation-alias Phar::webPhar */
    public static final function webPhar(?string $alias = null, ?string $index = null, ?string $fileNotFoundScript = null, array $mimeTypes = [], ?callable $rewrite = null) : void
    {
    }
}