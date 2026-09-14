<?php 

#[\Since('8.6')]
enum StreamErrorStore
{
    case Auto;
    case None;
    case NonTerminating;
    case Terminating;
    case All;
}