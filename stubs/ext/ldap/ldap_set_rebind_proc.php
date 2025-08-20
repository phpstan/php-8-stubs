<?php 

#endif
#endif
#if defined(LDAP_API_FEATURE_X_OPENLDAP) && defined(HAVE_3ARG_SETREBINDPROC)
/** @param resource $ldap */
#[\Until('8.1')]
function ldap_set_rebind_proc($ldap, ?callable $callback): bool
{
}
#endif
#endif
#if defined(LDAP_API_FEATURE_X_OPENLDAP) && defined(HAVE_3ARG_SETREBINDPROC)
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool
{
}
#endif
#endif
#if (defined(LDAP_API_FEATURE_X_OPENLDAP) && defined(HAVE_3ARG_SETREBINDPROC))
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool
{
}
#endif
#endif
#if (defined(LDAP_API_FEATURE_X_OPENLDAP) && defined(HAVE_3ARG_SETREBINDPROC))
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool
{
}
#endif
#endif
#if (defined(LDAP_API_FEATURE_X_OPENLDAP) && defined(HAVE_3ARG_SETREBINDPROC))
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool
{
}
#endif
#endif
#if (defined(LDAP_API_FEATURE_X_OPENLDAP) && defined(HAVE_3ARG_SETREBINDPROC))
#[\Since('8.5')]
function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool
{
}