<?php 

namespace Io\Poll;

#[\Since('8.6')]
abstract class FailedPollOperationException extends \Io\Poll\PollException
{
    /** @cvalue PHP_POLL_ERROR_CODE_NONE */
    public const int ERROR_NONE = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_SYSTEM */
    public const int ERROR_SYSTEM = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_NOMEM */
    public const int ERROR_NOMEM = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_INVALID */
    public const int ERROR_INVALID = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_EXISTS */
    public const int ERROR_EXISTS = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_NOTFOUND */
    public const int ERROR_NOTFOUND = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_TIMEOUT */
    public const int ERROR_TIMEOUT = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_INTERRUPTED */
    public const int ERROR_INTERRUPTED = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_PERMISSION */
    public const int ERROR_PERMISSION = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_TOOBIG */
    public const int ERROR_TOOBIG = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_AGAIN */
    public const int ERROR_AGAIN = UNKNOWN;
    /** @cvalue PHP_POLL_ERROR_CODE_NOSUPPORT */
    public const int ERROR_NOSUPPORT = UNKNOWN;
}