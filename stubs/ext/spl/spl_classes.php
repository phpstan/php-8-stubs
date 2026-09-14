<?php 

#[\Until('8.6')]
function spl_classes(): array
{
}
/**
 * @return array<string, string>
 * @refcount 1
 */
#[\Deprecated(message: "use ReflectionExtension::getClassNames() instead", since: "8.6")]
#[\Since('8.6')]
function spl_classes(): array
{
}