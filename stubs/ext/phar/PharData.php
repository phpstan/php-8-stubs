<?php 

class PharData extends \RecursiveDirectoryIterator implements \Countable, \ArrayAccess
{
    /** @implementation-alias Phar::__construct */
    public function __construct(string $filename, int $flags = FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS, ?string $alias = null, int $fileformat = 0)
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
    public function addEmptyDir(string $dirname)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::addFile
     */
    public function addFile(string $filename, ?string $localname = null)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::addFromString
     */
    public function addFromString(string $localname, string $contents)
    {
    }
    /**
     * @return array|false
     * @implementation-alias Phar::buildFromDirectory
     */
    public function buildFromDirectory(string $base_dir, string $regex = "")
    {
    }
    /**
     * @return array|false
     * @implementation-alias Phar::buildFromIterator
     */
    public function buildFromIterator(Traversable $iterator, ?string $base_directory = null)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::compressFiles
     */
    public function compressFiles(int $compression_type)
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
     * @return Phar|null
     * @implementation-alias Phar::compress
     */
    public function compress(int $compression_type, ?string $file_ext = null)
    {
    }
    /**
     * @return Phar|null
     * @implementation-alias Phar::decompress
     */
    public function decompress(?string $file_ext = null)
    {
    }
    /**
     * @return Phar|null
     * @implementation-alias Phar::convertToExecutable
     */
    public function convertToExecutable(?int $format = null, ?int $compression_type = null, ?string $file_ext = null)
    {
    }
    /**
     * @return Phar|null
     * @implementation-alias Phar::convertToData
     */
    public function convertToData(?int $format = null, ?int $compression_type = null, ?string $file_ext = null)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::copy
     */
    public function copy(string $newfile, string $oldfile)
    {
    }
    /**
     * @return int
     * @implementation-alias Phar::count
     */
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::delete
     */
    public function delete(string $entry)
    {
    }
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
    public function extractTo(string $pathto, array|string|null $files = null, bool $overwrite = false)
    {
    }
    /**
     * @return string|null
     * @implementation-alias Phar::getAlias
     */
    public function getAlias()
    {
    }
    /**
     * @return string
     * @implementation-alias Phar::getPath
     */
    public function getPath()
    {
    }
    /**
     * @return mixed
     * @implementation-alias Phar::getMetadata
     */
    public function getMetadata(array $unserialize_options = [])
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::getModified
     */
    public function getModified()
    {
    }
    /**
     * @return array|false
     * @implementation-alias Phar::getSignature
     */
    public function getSignature()
    {
    }
    /**
     * @return string
     * @implementation-alias Phar::getStub
     */
    public function getStub()
    {
    }
    /**
     * @return string
     * @implementation-alias Phar::getVersion
     */
    public function getVersion()
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::hasMetadata
     */
    public function hasMetadata()
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::isBuffering
     */
    public function isBuffering()
    {
    }
    /**
     * @return int|false
     * @implementation-alias Phar::isCompressed
     */
    public function isCompressed()
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::isFileFormat
     */
    public function isFileFormat(int $fileformat)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::isWritable
     */
    public function isWritable()
    {
    }
    /**
     * @param string $entry
     * @return bool
     * @implementation-alias Phar::offsetExists
     */
    public function offsetExists($entry)
    {
    }
    /**
     * @param string $entry
     * @return PharFileInfo
     * @implementation-alias Phar::offsetGet
     */
    public function offsetGet($entry)
    {
    }
    /**
     * @param string $entry
     * @param resource|string $value
     * @return void
     * @implementation-alias Phar::offsetSet
     */
    public function offsetSet($entry, $value)
    {
    }
    /**
     * @param string $entry
     * @return bool
     * @implementation-alias Phar::offsetUnset
     */
    public function offsetUnset($entry)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::setAlias
     */
    public function setAlias(string $alias)
    {
    }
    /**
     * @return bool
     * @implementation-alias Phar::setDefaultStub
     */
    public function setDefaultStub(?string $index = null, ?string $webindex = null)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::setMetadata
     */
    public function setMetadata(mixed $metadata)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::setSignatureAlgorithm
     */
    public function setSignatureAlgorithm(int $algorithm, ?string $privatekey = null)
    {
    }
    /**
     * @param resource $newstub
     * @return bool
     * @implementation-alias Phar::setStub
     */
    public function setStub($newstub, int $maxlen = -1)
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::startBuffering
     */
    public function startBuffering()
    {
    }
    /**
     * @return void
     * @implementation-alias Phar::stopBuffering
     */
    public function stopBuffering()
    {
    }
    /** @implementation-alias Phar::apiVersion */
    public static final function apiVersion() : string
    {
    }
    /** @implementation-alias Phar::canCompress */
    public static final function canCompress(int $method = 0) : bool
    {
    }
    /** @implementation-alias Phar::canWrite */
    public static final function canWrite() : bool
    {
    }
    /** @implementation-alias Phar::createDefaultStub */
    public static final function createDefaultStub(?string $index = null, ?string $webindex = null) : string
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
    public static final function running(bool $retphar = true) : string
    {
    }
    /** @implementation-alias Phar::mount */
    public static final function mount(string $inphar, string $externalfile) : void
    {
    }
    /** @implementation-alias Phar::mungServer */
    public static final function mungServer(array $munglist) : void
    {
    }
    /** @implementation-alias Phar::unlinkArchive */
    public static final function unlinkArchive(string $archive) : bool
    {
    }
    /** @implementation-alias Phar::webPhar */
    public static final function webPhar(?string $alias = null, ?string $index = null, string $f404 = "", array $mimetypes = [], ?callable $rewrites = null) : void
    {
    }
}