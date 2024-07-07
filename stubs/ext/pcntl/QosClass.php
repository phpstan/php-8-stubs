<?php 

#endif
#ifdef HAVE_PTHREAD_SET_QOS_CLASS_SELF_NP
#[\Since('8.4')]
enum QosClass
{
    case UserInteractive;
    case UserInitiated;
    case Default;
    case Utility;
    case Background;
}