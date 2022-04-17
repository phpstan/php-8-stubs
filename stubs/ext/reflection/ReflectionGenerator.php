<?php 

/** @not-serializable */
final class ReflectionGenerator
{
    public function __construct(Generator $generator)
    {
    }
    /** @return int */
    #[\Until('8.1')]
    public function getExecutingLine()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExecutingLine() : int
    {
    }
    /** @return string */
    #[\Until('8.1')]
    public function getExecutingFile()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExecutingFile() : string
    {
    }
    /** @return array */
    #[\Until('8.1')]
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT)
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT) : array
    {
    }
    /** @return ReflectionFunctionAbstract */
    #[\Until('8.1')]
    public function getFunction()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getFunction() : ReflectionFunctionAbstract
    {
    }
    /** @return object|null */
    #[\Until('8.1')]
    public function getThis()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getThis() : ?object
    {
    }
    /** @return Generator */
    #[\Until('8.1')]
    public function getExecutingGenerator()
    {
    }
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function getExecutingGenerator() : Generator
    {
    }
}