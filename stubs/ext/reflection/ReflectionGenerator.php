<?php 

final class ReflectionGenerator
{
    public function __construct(Generator $generator)
    {
    }
    /**
     * @tentative-return-type
     * @return int
     */
    #[\Until('8.5')]
    public function getExecutingLine()
    {
    }
    #[\Since('8.5')]
    public function getExecutingLine(): int
    {
    }
    /**
     * @tentative-return-type
     * @return string
     */
    #[\Until('8.5')]
    public function getExecutingFile()
    {
    }
    #[\Since('8.5')]
    public function getExecutingFile(): string
    {
    }
    /**
     * @tentative-return-type
     * @return array
     */
    #[\Until('8.5')]
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT)
    {
    }
    #[\Since('8.5')]
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array
    {
    }
    /**
     * @tentative-return-type
     * @return ReflectionFunctionAbstract
     */
    #[\Until('8.5')]
    public function getFunction()
    {
    }
    #[\Since('8.5')]
    public function getFunction(): ReflectionFunctionAbstract
    {
    }
    /**
     * @tentative-return-type
     * @return (object | null)
     */
    #[\Until('8.5')]
    public function getThis()
    {
    }
    #[\Since('8.5')]
    public function getThis(): ?object
    {
    }
    /**
     * @tentative-return-type
     * @return Generator
     */
    #[\Until('8.5')]
    public function getExecutingGenerator()
    {
    }
    #[\Since('8.5')]
    public function getExecutingGenerator(): Generator
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function isClosed(): bool
    {
    }
    #[\Since('8.5')]
    public function isClosed(): bool
    {
    }
}