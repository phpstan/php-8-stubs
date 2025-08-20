<?php 

/* syslog.c */
#ifdef HAVE_SYSLOG_H
#[\Until('8.2')]
function openlog(string $prefix, int $flags, int $facility): bool
{
}
/* syslog.c */
#ifdef HAVE_SYSLOG_H
#[\Since('8.2')]
#[\Until('8.3')]
function openlog(string $prefix, int $flags, int $facility): true
{
}
/* syslog.c */
#ifdef HAVE_SYSLOG_H
#[\Since('8.3')]
#[\Until('8.4')]
function openlog(string $prefix, int $flags, int $facility): true
{
}
/* syslog.c */
#ifdef HAVE_SYSLOG_H
#[\Since('8.4')]
#[\Until('8.5')]
function openlog(string $prefix, int $flags, int $facility): true
{
}
/* syslog.c */
#ifdef HAVE_SYSLOG_H
#[\Since('8.5')]
function openlog(string $prefix, int $flags, int $facility): true
{
}