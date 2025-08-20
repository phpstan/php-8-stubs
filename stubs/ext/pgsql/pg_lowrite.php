<?php 

/**
 * @param resource $lob
 * @alias pg_lo_write
 * @deprecated
 */
#[\Until('8.1')]
function pg_lowrite($lob, string $data, ?int $length = null): int|false
{
}
/**
 * @alias pg_lo_write
 * @deprecated
 */
#[\Since('8.1')]
#[\Until('8.2')]
function pg_lowrite(\PgSql\Lob $lob, string $data, ?int $length = null): int|false
{
}
/**
 * @alias pg_lo_write
 * @deprecated
 */
#[\Since('8.2')]
#[\Until('8.3')]
function pg_lowrite(\PgSql\Lob $lob, string $data, ?int $length = null): int|false
{
}
/**
 * @alias pg_lo_write
 * @deprecated
 */
#[\Since('8.3')]
#[\Until('8.4')]
function pg_lowrite(\PgSql\Lob $lob, string $data, ?int $length = null): int|false
{
}
/**
 * @alias pg_lo_write
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_write() instead')]
#[\Since('8.4')]
#[\Until('8.5')]
function pg_lowrite(\PgSql\Lob $lob, string $data, ?int $length = null): int|false
{
}
/**
 * @alias pg_lo_write
 */
#[\Deprecated(since: '8.0', message: 'use pg_lo_write() instead')]
#[\Since('8.5')]
function pg_lowrite(\PgSql\Lob $lob, string $data, ?int $length = null): int|false
{
}