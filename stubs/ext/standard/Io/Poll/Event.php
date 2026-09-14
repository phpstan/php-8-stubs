<?php 

namespace Io\Poll;

// Keep in sync with main/php_poll.h!
#[\Since('8.6')]
enum Event
{
    case Read;
    case Write;
    case Error;
    case HangUp;
    case ReadHangUp;
    case OneShot;
    case EdgeTriggered;
}