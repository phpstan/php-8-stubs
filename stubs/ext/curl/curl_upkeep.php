<?php 

#if LIBCURL_VERSION_NUM >= 0x073E00 /* Available since 7.62.0 */
#[\Since('8.2')]
#[\Until('8.3')]
function curl_upkeep(\CurlHandle $handle): bool
{
}
#if LIBCURL_VERSION_NUM >= 0x073E00 /* Available since 7.62.0 */
#[\Since('8.3')]
#[\Until('8.4')]
function curl_upkeep(\CurlHandle $handle): bool
{
}
#if LIBCURL_VERSION_NUM >= 0x073E00 /* Available since 7.62.0 */
#[\Since('8.4')]
#[\Until('8.5')]
function curl_upkeep(\CurlHandle $handle): bool
{
}
#if LIBCURL_VERSION_NUM >= 0x073E00 /* Available since 7.62.0 */
#[\Since('8.5')]
function curl_upkeep(\CurlHandle $handle): bool
{
}