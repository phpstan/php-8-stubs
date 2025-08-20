<?php 

#endif
/** @param resource $statement */
#[\Until('8.4')]
function odbc_num_fields($statement): int
{
}
#endif
#[\Since('8.4')]
#[\Until('8.5')]
function odbc_num_fields(\Odbc\Result $statement): int
{
}
#endif
#[\Since('8.5')]
function odbc_num_fields(\Odbc\Result $statement): int
{
}