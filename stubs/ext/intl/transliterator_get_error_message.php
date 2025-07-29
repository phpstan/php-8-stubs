<?php 

#[\Until('8.5')]
function transliterator_get_error_message(\Transliterator $transliterator): string|false
{
}
#[\Since('8.5')]
function transliterator_get_error_message(\Transliterator $transliterator): string
{
}