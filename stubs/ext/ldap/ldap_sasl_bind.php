<?php 

#ifdef HAVE_LDAP_SASL
/** @param resource $ldap */
#[\Until('8.1')]
function ldap_sasl_bind($ldap, ?string $dn = null, ?string $password = null, ?string $mech = null, ?string $realm = null, ?string $authc_id = null, ?string $authz_id = null, ?string $props = null): bool
{
}
#ifdef HAVE_LDAP_SASL
#[\Since('8.1')]
#[\Until('8.2')]
function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = null, ?string $password = null, ?string $mech = null, ?string $realm = null, ?string $authc_id = null, ?string $authz_id = null, ?string $props = null): bool
{
}
#ifdef HAVE_LDAP_SASL
#[\Since('8.2')]
#[\Until('8.3')]
function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = null, #[\SensitiveParameter] ?string $password = null, ?string $mech = null, ?string $realm = null, ?string $authc_id = null, ?string $authz_id = null, ?string $props = null): bool
{
}
#ifdef HAVE_LDAP_SASL
#[\Since('8.3')]
#[\Until('8.4')]
function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = null, #[\SensitiveParameter] ?string $password = null, ?string $mech = null, ?string $realm = null, ?string $authc_id = null, ?string $authz_id = null, ?string $props = null): bool
{
}
#ifdef HAVE_LDAP_SASL
#[\Since('8.4')]
#[\Until('8.5')]
function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = null, #[\SensitiveParameter] ?string $password = null, ?string $mech = null, ?string $realm = null, ?string $authc_id = null, ?string $authz_id = null, ?string $props = null): bool
{
}
#ifdef HAVE_LDAP_SASL
#[\Since('8.5')]
function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = null, #[\SensitiveParameter] ?string $password = null, ?string $mech = null, ?string $realm = null, ?string $authc_id = null, ?string $authz_id = null, ?string $props = null): bool
{
}