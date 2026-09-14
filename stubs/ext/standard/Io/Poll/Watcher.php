<?php 

namespace Io\Poll;

/**
 * @strict-properties
 * @not-serializable
 */
#[\Since('8.6')]
final class Watcher
{
    final private function __construct()
    {
    }
    public function getHandle(): Handle
    {
    }
    /** @return list<Event> */
    public function getWatchedEvents(): array
    {
    }
    /** @return list<Event> */
    public function getTriggeredEvents(): array
    {
    }
    public function getData(): mixed
    {
    }
    public function hasTriggered(Event $event): bool
    {
    }
    public function isActive(): bool
    {
    }
    public function modify(array $events, mixed $data = null): void
    {
    }
    public function modifyEvents(array $events): void
    {
    }
    public function modifyData(mixed $data): void
    {
    }
    public function remove(): void
    {
    }
}