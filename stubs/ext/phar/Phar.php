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
    public function addEmptyDir(string $dirname)
    {
    }
    /** @return void */
    public function addFile(string $filename, ?string $localname = null)
    {
    }
    /** @return void */
    public function addFromString(string $localname, string $contents)
    {
    }
    /** @return array|false */
    public function buildFromDirectory(string $base_dir, string $regex = "")
    {
    }
    /** @return array|false */
    public function buildFromIterator(Traversable $iterator, ?string $base_directory = null)
    {
    }
    /** @return void */
    public function compressFiles(int $compression_type)
    {
    }
    /** @return bool */
    public function decompressFiles()
    {
    }
    /** @return Phar|null */
    public function compress(int $compression_type, ?string $file_ext = null)
    {
    }
    /** @return Phar|null */
    public function decompress(?string $file_ext = null)
    {
    }
    /** @return Phar|null */
    public function convertToExecutable(int $format = 9021976, int $compression_type = 9021976, ?string $file_ext = null)
    {
    }
    /** @return Phar|null */
    public function convertToData(int $format = 9021976, int $compression_type = 9021976, ?string $file_ext = null)
    {
    }
    /** @return bool */
    public function copy(string $newfile, string $oldfile)
    {
    }
    /** @return int */
    public function count(int $mode = COUNT_NORMAL)
    {
    }
    /** @return bool */
    public function delete(string $entry)
    {
    }
    /** @return bool */
    public function delMetadata()
    {
    }
    /** @return bool */
    public function extractTo(string $pathto, array|string|null $files = null, bool $overwrite = false)
    {
    }
    /** @return string|null */
    public function getAlias()
    {
    }
    /** @return string */
    public function getPath()
    {
    }
    /** @return mixed */
    public function getMetadata(array $unserialize_options = [])
    {
    }
    /** @return bool */
    public function getModified()
    {
    }
    /** @return array|false */
    public function getSignature()
    {
    }
    /** @return string */
    public function getStub()
    {
    }
    /** @return string */
    public function getVersion()
    {
    }
    /** @return bool */
    public function hasMetadata()
    {
    }
    /** @return bool */
    public function isBuffering()
    {
    }
    /** @return int|false */
    public function isCompressed()
    {
    }
    /** @return bool */
    public function isFileFormat(int $fileformat)
    {
    }
    /** @return bool */
    public function isWritable()
    {
    }
    /**
     * @param string $entry
     * @return bool
     */
    public function offsetExists($entry)
    {
    }
    /**
     * @param string $entry
     * @return PharFileInfo
     */
    public function offsetGet($entry)
    {
    }
    /**
     * @param string $entry
     * @param resource|string $value
     * @return void
     */
    public function offsetSet($entry, $value)
    {
    }
    /**
     * @param string $entry
     * @return bool
     */
    public function offsetUnset($entry)
    {
    }
    /** @return bool */
    public function setAlias(string $alias)
    {
    }
    /** @return bool */
    public function setDefaultStub(?string $index = null, ?string $webindex = null)
    {
    }
    /** @return void */
    public function setMetadata(mixed $metadata)
    {
    }
    /** @return void */
    public function setSignatureAlgorithm(int $algorithm, ?string $privatekey = null)
    {
    }
    /**
     * @param resource $newstub
     * @return bool
     */
    public function setStub($newstub, int $maxlen = -1)
    {
    }
    /** @return void */
    public function startBuffering()
    {
    }
    /** @return void */
    public function stopBuffering()
    {
    }
    public static final function apiVersion() : string
    {
    }
    public static final function canCompress(int $method = 0) : bool
    {
    }
    public static final function canWrite() : bool
    {
    }
    public static final function createDefaultStub(?string $index = null, ?string $webindex = null) : string
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
    public static final function running(bool $retphar = true) : string
    {
    }
    public static final function mount(string $inphar, string $externalfile) : void
    {
    }
    public static final function mungServer(array $munglist) : void
    {
    }
    public static final function unlinkArchive(string $archive) : bool
    {
    }
    public static final function webPhar(?string $alias = null, ?string $index = null, string $f404 = "", array $mimetypes = [], ?callable $rewrites = null) : void
    {
    }
}