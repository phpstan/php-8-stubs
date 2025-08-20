<?php 

#endif
#ifdef HAVE_PTHREAD_SET_QOS_CLASS_SELF_NP
#[\Since('8.4')]
#[\Until('8.5')]
function pcntl_getqos_class(): \Pcntl\QosClass
{
}
#endif
#ifdef HAVE_PTHREAD_SET_QOS_CLASS_SELF_NP
#[\Since('8.5')]
function pcntl_getqos_class(): \Pcntl\QosClass
{
}