<?php 

#endif
#ifdef HAVE_LDAP_PASSWD
/**
 * @param resource $ldap
 * @param array $controls
 */
#[\Until('8.1')]
function ldap_exop_passwd($ldap, string $user = "", string $old_password = "", string $new_password = "", &$controls = null): string|bool
{
}
#endif
#ifdef HAVE_LDAP_PASSWD
/**
 * @param array $controls
 */
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", string $old_password = "", string $new_password = "", &$controls = null): string|bool
{
}
#endif
#ifdef HAVE_LDAP_PASSWD
/**
 * @param array $controls
 */
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", #[\SensitiveParameter] string $old_password = "", #[\SensitiveParameter] string $new_password = "", &$controls = null): string|bool
{
}
#endif
#ifdef HAVE_LDAP_PASSWD
/**
 * @param array $controls
 */
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", #[\SensitiveParameter] string $old_password = "", #[\SensitiveParameter] string $new_password = "", &$controls = null): string|bool
{
}
#endif
#ifdef HAVE_LDAP_PASSWD
/**
 * @param array $controls
 */
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", #[\SensitiveParameter] string $old_password = "", #[\SensitiveParameter] string $new_password = "", &$controls = null): string|bool
{
}
#endif
#ifdef HAVE_LDAP_PASSWD
/**
 * @param array $controls
 */
#[\Since('8.5')]
function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", #[\SensitiveParameter] string $old_password = "", #[\SensitiveParameter] string $new_password = "", &$controls = null): string|bool
{
}