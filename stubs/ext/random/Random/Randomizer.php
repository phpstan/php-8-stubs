<?php 

namespace Random;

/**
 * @strict-properties
 */
#[\Since('8.2')]
final class Randomizer
{
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function nextFloat(): float
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function getFloat(float $min, float $max, IntervalBoundary $boundary = IntervalBoundary::ClosedOpen): float
    {
    }
    #[\Since('8.3')]
    #[\Until('8.4')]
    public function getBytesFromString(string $string, int $length): string
    {
    }
    public function __construct(?Engine $engine = null)
    {
    }
    public function nextInt(): int
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function nextFloat(): float
    {
    }
    #[\Since('8.5')]
    public function nextFloat(): float
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getFloat(float $min, float $max, IntervalBoundary $boundary = IntervalBoundary::ClosedOpen): float
    {
    }
    #[\Since('8.5')]
    public function getFloat(float $min, float $max, IntervalBoundary $boundary = IntervalBoundary::ClosedOpen): float
    {
    }
    public function getInt(int $min, int $max): int
    {
    }
    public function getBytes(int $length): string
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getBytesFromString(string $string, int $length): string
    {
    }
    #[\Since('8.5')]
    public function getBytesFromString(string $string, int $length): string
    {
    }
    public function shuffleArray(array $array): array
    {
    }
    public function shuffleBytes(string $bytes): string
    {
    }
    public function pickArrayKeys(array $array, int $num): array
    {
    }
    public function __serialize(): array
    {
    }
    public function __unserialize(array $data): void
    {
    }
}