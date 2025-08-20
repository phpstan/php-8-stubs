<?php 

final class FFI
{
    /**
     * @var int
     * @cvalue __BIGGEST_ALIGNMENT__
     * @link ffi-ffi.constants.biggest-alignment
     */
    #[\Since('8.2')]
    #[\Until('8.3')]
    public const __BIGGEST_ALIGNMENT__ = UNKNOWN;
    #[\Until('8.4')]
    public static function new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): ?FFI\CData
    {
    }
    /**
     * @param FFI\CData|int|float|bool|null $ptr
     * @prefer-ref $ptr
     */
    #[\Until('8.4')]
    public static function cast(FFI\CType|string $type, $ptr): ?FFI\CData
    {
    }
    #[\Until('8.4')]
    public static function type(string $type): ?FFI\CType
    {
    }
    /**
     * @cvalue __BIGGEST_ALIGNMENT__
     * @link ffi-ffi.constants.biggest-alignment
     */
    #[\Since('8.3')]
    #[\Until('8.4')]
    public const int __BIGGEST_ALIGNMENT__ = UNKNOWN;
    public static function cdef(string $code = "", ?string $lib = null): FFI
    {
    }
    public static function load(string $filename): ?FFI
    {
    }
    public static function scope(string $name): FFI
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public static function new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): FFI\CData
    {
    }
    #[\Since('8.5')]
    public static function new(FFI\CType|string $type, bool $owned = true, bool $persistent = false): FFI\CData
    {
    }
    /** @prefer-ref $ptr */
    public static function free(FFI\CData $ptr): void
    {
    }
    /**
     * @param FFI\CData|int|float|bool|null $ptr
     * @prefer-ref $ptr
     */
    #[\Since('8.4')]
    #[\Until('8.5')]
    public static function cast(FFI\CType|string $type, $ptr): FFI\CData
    {
    }
    /**
     * @param FFI\CData|int|float|bool|null $ptr
     * @prefer-ref $ptr
     */
    #[\Since('8.5')]
    public static function cast(FFI\CType|string $type, $ptr): FFI\CData
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public static function type(string $type): FFI\CType
    {
    }
    #[\Since('8.5')]
    public static function type(string $type): FFI\CType
    {
    }
    /** @prefer-ref $ptr */
    public static function typeof(FFI\CData $ptr): FFI\CType
    {
    }
    public static function arrayType(FFI\CType $type, array $dimensions): FFI\CType
    {
    }
    /** @prefer-ref $ptr */
    public static function addr(FFI\CData $ptr): FFI\CData
    {
    }
    /** @prefer-ref $ptr */
    public static function sizeof(FFI\CData|FFI\CType $ptr): int
    {
    }
    /** @prefer-ref $ptr */
    public static function alignof(FFI\CData|FFI\CType $ptr): int
    {
    }
    /**
     * @param FFI\CData|string $from
     * @prefer-ref $to
     * @prefer-ref $from
     */
    public static function memcpy(FFI\CData $to, $from, int $size): void
    {
    }
    /**
     * @prefer-ref $ptr1
     * @param string|FFI\CData $ptr1
     * @prefer-ref $ptr2
     * @param string|FFI\CData $ptr2
     */
    public static function memcmp($ptr1, $ptr2, int $size): int
    {
    }
    /** @prefer-ref $ptr */
    public static function memset(FFI\CData $ptr, int $value, int $size): void
    {
    }
    /** @prefer-ref $ptr */
    public static function string(FFI\CData $ptr, ?int $size = null): string
    {
    }
    /** @prefer-ref $ptr */
    public static function isNull(FFI\CData $ptr): bool
    {
    }
    /** @cvalue __BIGGEST_ALIGNMENT__ */
    #[\Since('8.4')]
    public const int __BIGGEST_ALIGNMENT__ = UNKNOWN;
}