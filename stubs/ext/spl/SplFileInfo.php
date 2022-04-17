<?php 

/** @generate-class-entries */
/** @not-serializable */
class SplFileInfo implements \Stringable
{
    public function __construct(string $filename)
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
    /** @return string */
    #[\Until('8.1')]
    public function getFilename()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFilename() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getExtension()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExtension() : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getBasename(string $suffix = "")
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getBasename(string $suffix = "") : string
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getPathname()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPathname() : string
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getPerms()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPerms() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getInode()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getInode() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getSize()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getSize() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getOwner()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getOwner() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getGroup()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getGroup() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getATime()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getATime() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getMTime()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getMTime() : int|false
    {
    }
    /** @return int|false */
    #[\Until('8.1')]
    public function getCTime()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getCTime() : int|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getType()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getType() : string|false
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
    /** @return bool */
    #[\Until('8.1')]
    public function isReadable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isReadable() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isExecutable()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isExecutable() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isFile()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isFile() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isDir()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isDir() : bool
    {
    }
    /** @return bool */
    #[\Until('8.1')]
    public function isLink()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function isLink() : bool
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getLinkTarget()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getLinkTarget() : string|false
    {
    }
    /** @return string|false */
    #[\Until('8.1')]
    public function getRealPath()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getRealPath() : string|false
    {
    }
    /** @return SplFileInfo */
    #[\Until('8.1')]
    public function getFileInfo(?string $class = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFileInfo(?string $class = null) : SplFileInfo
    {
    }
    /** @return SplFileInfo|null */
    #[\Until('8.1')]
    public function getPathInfo(?string $class = null)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getPathInfo(?string $class = null) : ?SplFileInfo
    {
    }
    /**
     * @param resource|null $context
     * @return SplFileObject
     */
    #[\Until('8.1')]
    public function openFile(string $mode = "r", bool $useIncludePath = false, $context = null)
    {
    }
    /**
     * @param resource|null $context
     * @tentative-return-type
     */
    #[\Since('8.1')]
    public function openFile(string $mode = "r", bool $useIncludePath = false, $context = null) : SplFileObject
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setFileClass(string $class = SplFileObject::class)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setFileClass(string $class = SplFileObject::class) : void
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public function setInfoClass(string $class = SplFileInfo::class)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function setInfoClass(string $class = SplFileInfo::class) : void
    {
    }
    /** @implementation-alias SplFileInfo::getPathname */
    public function __toString() : string
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function __debugInfo()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function __debugInfo() : array
    {
    }
    /** @return void */
    #[\Until('8.1')]
    public final function _bad_state_ex()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public final function _bad_state_ex() : void
    {
    }
}