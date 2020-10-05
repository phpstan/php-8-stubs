<?php 

/** @generate-function-entries */
class SplFileInfo
{
    public function __construct(string $file_name)
    {
    }
    /** @return string */
    public function getPath()
    {
    }
    /** @return string */
    public function getFilename()
    {
    }
    /** @return string */
    public function getExtension()
    {
    }
    /** @return string */
    public function getBasename(string $suffix = "")
    {
    }
    /** @return string */
    public function getPathname()
    {
    }
    /** @return int|false */
    public function getPerms()
    {
    }
    /** @return int|false */
    public function getInode()
    {
    }
    /** @return int|false */
    public function getSize()
    {
    }
    /** @return int|false */
    public function getOwner()
    {
    }
    /** @return int|false */
    public function getGroup()
    {
    }
    /** @return int|false */
    public function getATime()
    {
    }
    /** @return int|false */
    public function getMTime()
    {
    }
    /** @return int|false */
    public function getCTime()
    {
    }
    /** @return string|false */
    public function getType()
    {
    }
    /** @return bool */
    public function isWritable()
    {
    }
    /** @return bool */
    public function isReadable()
    {
    }
    /** @return bool */
    public function isExecutable()
    {
    }
    /** @return bool */
    public function isFile()
    {
    }
    /** @return bool */
    public function isDir()
    {
    }
    /** @return bool */
    public function isLink()
    {
    }
    /** @return string|false */
    public function getLinkTarget()
    {
    }
    /** @return string|false */
    public function getRealPath()
    {
    }
    /** @return SplFileInfo */
    public function getFileInfo(?string $class_name = null)
    {
    }
    /** @return SplFileInfo|null */
    public function getPathInfo(?string $class_name = null)
    {
    }
    /**
     * @param resource|null $context
     * @return SplFileObject
     */
    public function openFile(string $open_mode = "r", bool $use_include_path = false, $context = null)
    {
    }
    /** @return void */
    public function setFileClass(string $class_name = SplFileObject::class)
    {
    }
    /** @return void */
    public function setInfoClass(string $class_name = SplFileInfo::class)
    {
    }
    /** @implementation-alias SplFileInfo::getPathname */
    public function __toString() : string
    {
    }
    /** @return array */
    public function __debugInfo()
    {
    }
    /** @return void */
    public final function _bad_state_ex()
    {
    }
}