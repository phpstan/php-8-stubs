<?php 

class ZipArchive implements \Countable
{
    /** @return bool|int */
    #[\Until('8.1')]
    public function open(string $filename, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function open(string $filename, int $flags = 0) : bool|int
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setPassword(string $password)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setPassword(string $password) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function close()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function close() : bool
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function count()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function count() : int
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getStatusString()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getStatusString() : string
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function addEmptyDir(string $dirname, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addEmptyDir(string $dirname, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function addFile(string $filepath, string $entryname = "", int $start = 0, int $length = 0, int $flags = ZipArchive::FL_OVERWRITE)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addFile(string $filepath, string $entryname = "", int $start = 0, int $length = 0, int $flags = ZipArchive::FL_OVERWRITE) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function replaceFile(string $filepath, string $index, int $start = 0, int $length = 0, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function replaceFile(string $filepath, string $index, int $start = 0, int $length = 0, int $flags = 0) : bool
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function addGlob(string $pattern, int $flags = 0, array $options = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addGlob(string $pattern, int $flags = 0, array $options = []) : array|false
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function addPattern(string $pattern, string $path = ".", array $options = [])
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function addPattern(string $pattern, string $path = ".", array $options = []) : array|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function renameIndex(int $index, string $new_name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function renameIndex(int $index, string $new_name) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function renameName(string $name, string $new_name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function renameName(string $name, string $new_name) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setArchiveComment(string $comment)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setArchiveComment(string $comment) : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getArchiveComment(int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getArchiveComment(int $flags = 0) : string|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setCommentIndex(int $index, string $comment)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setCommentIndex(int $index, string $comment) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setCommentName(string $name, string $comment)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setCommentName(string $name, string $comment) : bool
    {
    }
    #ifdef HAVE_SET_MTIME
    /** @return bool */
    #[\Until('8.1')]
    public function setMtimeIndex(int $index, int $timestamp, int $flags = 0)
    {
    }
    #ifdef HAVE_SET_MTIME
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMtimeIndex(int $index, int $timestamp, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setMtimeName(string $name, int $timestamp, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setMtimeName(string $name, int $timestamp, int $flags = 0) : bool
    {
    }
    #endif
    /** @return string|false */
    #[\Until('8.1')]
    public function getCommentIndex(int $index, int $flags = 0)
    {
    }
    #endif
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCommentIndex(int $index, int $flags = 0) : string|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getCommentName(string $name, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCommentName(string $name, int $flags = 0) : string|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function deleteIndex(int $index)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function deleteIndex(int $index) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function deleteName(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function deleteName(string $name) : bool
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function statName(string $name, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function statName(string $name, int $flags = 0) : array|false
    {
    }
    /** @return array|false */
    #[\Until('8.1')]
    public function statIndex(int $index, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function statIndex(int $index, int $flags = 0) : array|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function locateName(string $name, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function locateName(string $name, int $flags = 0) : int|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getNameIndex(int $index, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getNameIndex(int $index, int $flags = 0) : string|false
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function unchangeArchive()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function unchangeArchive() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function unchangeAll()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function unchangeAll() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function unchangeIndex(int $index)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function unchangeIndex(int $index) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function unchangeName(string $name)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function unchangeName(string $name) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function extractTo(string $pathto, array|string|null $files = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function extractTo(string $pathto, array|string|null $files = null) : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getFromName(string $name, int $len = 0, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFromName(string $name, int $len = 0, int $flags = 0) : string|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getFromIndex(int $index, int $len = 0, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFromIndex(int $index, int $len = 0, int $flags = 0) : string|false
    {
    }
    /** @return resource|false */
    public function getStream(string $name)
    {
    }
    #ifdef ZIP_OPSYS_DEFAULT
    /** @return bool */
    #[\Until('8.1')]
    public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0)
    {
    }
    #ifdef ZIP_OPSYS_DEFAULT
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0) : bool
    {
    }
    /**
     * @param int $opsys
     * @param int $attr
     * @return bool
     */
    #[\Until('8.1')]
    public function getExternalAttributesName(string $name, &$opsys, &$attr, int $flags = 0)
    {
    }
    /**
     * @param int $opsys
     * @param int $attr
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function getExternalAttributesName(string $name, &$opsys, &$attr, int $flags = 0) : bool
    {
    }
    /**
     * @param int $opsys
     * @param int $attr
     * @return bool
     */
    #[\Until('8.1')]
    public function getExternalAttributesIndex(int $index, &$opsys, &$attr, int $flags = 0)
    {
    }
    /**
     * @param int $opsys
     * @param int $attr
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function getExternalAttributesIndex(int $index, &$opsys, &$attr, int $flags = 0) : bool
    {
    }
    #endif
    /** @return bool */
    #[\Until('8.1')]
    public function setCompressionName(string $name, int $method, int $compflags = 0)
    {
    }
    #endif
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setCompressionName(string $name, int $method, int $compflags = 0) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setCompressionIndex(int $index, int $method, int $compflags = 0)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setCompressionIndex(int $index, int $method, int $compflags = 0) : bool
    {
    }
    #ifdef HAVE_ENCRYPTION
    /** @return bool */
    #[\Until('8.1')]
    public function setEncryptionName(string $name, int $method, ?string $password = null)
    {
    }
    #ifdef HAVE_ENCRYPTION
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setEncryptionName(string $name, int $method, ?string $password = null) : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function setEncryptionIndex(int $index, int $method, ?string $password = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setEncryptionIndex(int $index, int $method, ?string $password = null) : bool
    {
    }
    #endif
    #ifdef HAVE_PROGRESS_CALLBACK
    /** @return bool */
    #[\Until('8.1')]
    public function registerProgressCallback(float $rate, callable $callback)
    {
    }
    #endif
    #ifdef HAVE_PROGRESS_CALLBACK
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerProgressCallback(float $rate, callable $callback) : bool
    {
    }
    #endif
    #ifdef HAVE_CANCEL_CALLBACK
    /** @return bool */
    #[\Until('8.1')]
    public function registerCancelCallback(callable $callback)
    {
    }
    #endif
    #ifdef HAVE_CANCEL_CALLBACK
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function registerCancelCallback(callable $callback) : bool
    {
    }
    #endif
    #ifdef HAVE_METHOD_SUPPORTED
    public static function isCompressionMethodSupported(int $method, bool $enc = true) : bool
    {
    }
    public static function isEncryptionMethodSupported(int $method, bool $enc = true) : bool
    {
    }
}