<?php 

#[\Until('8.5')]
function curl_share_close(\CurlShareHandle $share_handle): void
{
}
#[\Deprecated(since: '8.5', message: "as it has no effect since PHP 8.0")]
#[\Since('8.5')]
function curl_share_close(\CurlShareHandle $share_handle): void
{
}