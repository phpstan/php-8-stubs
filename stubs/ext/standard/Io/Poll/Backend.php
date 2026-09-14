<?php 

namespace Io\Poll;

// Keep in sync with main/php_poll.h!
#[\Since('8.6')]
enum Backend
{
    case Auto;
    case Poll;
    case Epoll;
    case Kqueue;
    case EventPorts;
    case WSAPoll;
    /** @return list<Backend> */
    public static function getAvailableBackends(): array
    {
    }
    public function isAvailable(): bool
    {
    }
    public function supportsEdgeTriggering(): bool
    {
    }
}