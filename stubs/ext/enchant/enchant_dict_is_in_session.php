<?php 

/**
* @alias enchant_dict_is_added
* @deprecated
*/
#[\Until('8.4')]
function enchant_dict_is_in_session(\EnchantDictionary $dictionary, string $word): bool
{
}
/**
* @alias enchant_dict_is_added
*/
#[\Deprecated(since: '8.0', message: 'use enchant_dict_is_added() instead')]
#[\Since('8.4')]
function enchant_dict_is_in_session(\EnchantDictionary $dictionary, string $word): bool
{
}