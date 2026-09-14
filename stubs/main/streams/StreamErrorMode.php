<?php 

#[\Since('8.6')]
enum StreamErrorMode
{
    case Error;
    case Exception;
    case Silent;
}