<?php 

namespace Io\Poll;

/**
 * @strict-properties
 * @not-serializable
 */
#[\Since('8.6')]
final class Context
{
    public function __construct(Backend $backend = Backend::Auto)
    {
    }
    public function add(Handle $handle, array $events, mixed $data = null): Watcher
    {
    }
    /** @return list<Watcher> */
    public function wait(?\Time\Duration $timeout = null, ?int $maxEvents = null): array
    {
    }
    public function getBackend(): Backend
    {
    }
}