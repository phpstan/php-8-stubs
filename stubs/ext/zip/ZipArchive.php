<?php 

class ZipArchive implements \Countable
{
    /** @tentative-return-type */
    public function open(string $filename, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function setPassword(string $password)
    {
    }
    /** @tentative-return-type */
    public function close()
    {
    }
    /** @tentative-return-type */
    public function count()
    {
    }
    /** @tentative-return-type */
    public function getStatusString()
    {
    }
    /** @tentative-return-type */
    public function addEmptyDir(string $dirname, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function addFromString(string $name, string $content, int $flags = ZipArchive::FL_OVERWRITE)
    {
    }
    /** @tentative-return-type */
    public function addFile(string $filepath, string $entryname = "", int $start = 0, int $length = 0, int $flags = ZipArchive::FL_OVERWRITE)
    {
    }
    /** @tentative-return-type */
    public function replaceFile(string $filepath, string $index, int $start = 0, int $length = 0, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function addGlob(string $pattern, int $flags = 0, array $options = [])
    {
    }
    /** @tentative-return-type */
    public function addPattern(string $pattern, string $path = ".", array $options = [])
    {
    }
    /** @tentative-return-type */
    public function renameIndex(int $index, string $new_name)
    {
    }
    /** @tentative-return-type */
    public function renameName(string $name, string $new_name)
    {
    }
    /** @tentative-return-type */
    public function setArchiveComment(string $comment)
    {
    }
    /** @tentative-return-type */
    public function getArchiveComment(int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function setCommentIndex(int $index, string $comment)
    {
    }
    /** @tentative-return-type */
    public function setCommentName(string $name, string $comment)
    {
    }
    #ifdef HAVE_SET_MTIME
    /** @tentative-return-type */
    public function setMtimeIndex(int $index, int $timestamp, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function setMtimeName(string $name, int $timestamp, int $flags = 0)
    {
    }
    #endif
    /** @tentative-return-type */
    public function getCommentIndex(int $index, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function getCommentName(string $name, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function deleteIndex(int $index)
    {
    }
    /** @tentative-return-type */
    public function deleteName(string $name)
    {
    }
    /** @tentative-return-type */
    public function statName(string $name, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function statIndex(int $index, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function locateName(string $name, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function getNameIndex(int $index, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function unchangeArchive()
    {
    }
    /** @tentative-return-type */
    public function unchangeAll()
    {
    }
    /** @tentative-return-type */
    public function unchangeIndex(int $index)
    {
    }
    /** @tentative-return-type */
    public function unchangeName(string $name)
    {
    }
    /** @tentative-return-type */
    public function extractTo(string $pathto, array|string|null $files = null)
    {
    }
    /** @tentative-return-type */
    public function getFromName(string $name, int $len = 0, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function getFromIndex(int $index, int $len = 0, int $flags = 0)
    {
    }
    /** @return resource|false */
    public function getStream(string $name)
    {
    }
    #ifdef ZIP_OPSYS_DEFAULT
    /** @tentative-return-type */
    public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags = 0)
    {
    }
    /** @tentative-return-type */
    public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags = 0)
    {
    }
    /**
     * @param int $opsys
     * @param int $attr
     * @tentative-return-type
     */
    public function getExternalAttributesName(string $name, &$opsys, &$attr, int $flags = 0)
    {
    }
    /**
     * @param int $opsys
     * @param int $attr
     * @tentative-return-type
     */
    public function getExternalAttributesIndex(int $index, &$opsys, &$attr, int $flags = 0)
    {
    }
    #endif
    /** @tentative-return-type */
    public function setCompressionName(string $name, int $method, int $compflags = 0)
    {
    }
    /** @tentative-return-type */
    public function setCompressionIndex(int $index, int $method, int $compflags = 0)
    {
    }
    #ifdef HAVE_ENCRYPTION
    /** @tentative-return-type */
    public function setEncryptionName(string $name, int $method, ?string $password = null)
    {
    }
    /** @tentative-return-type */
    public function setEncryptionIndex(int $index, int $method, ?string $password = null)
    {
    }
    #endif
    #ifdef HAVE_PROGRESS_CALLBACK
    /** @tentative-return-type */
    public function registerProgressCallback(float $rate, callable $callback)
    {
    }
    #endif
    #ifdef HAVE_CANCEL_CALLBACK
    /** @tentative-return-type */
    public function registerCancelCallback(callable $callback)
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