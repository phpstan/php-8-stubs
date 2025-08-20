<?php 

#endif
#ifdef HAVE_SOCKATMARK
#[\Since('8.3')]
#[\Until('8.4')]
function socket_atmark(\Socket $socket): bool
{
}
#endif
#ifdef HAVE_SOCKATMARK
#[\Since('8.4')]
#[\Until('8.5')]
function socket_atmark(\Socket $socket): bool
{
}
#endif
#ifdef HAVE_SOCKATMARK
#[\Since('8.5')]
function socket_atmark(\Socket $socket): bool
{
}