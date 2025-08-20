<?php 

/**
* @alias enchant_dict_add
* @deprecated
*/
#[\Until('8.4')]
function enchant_dict_add_to_personal(\EnchantDictionary $dictionary, string $word): void
{
}
/**
* @alias enchant_dict_add
*/
#[\Deprecated(since: '8.0', message: 'use enchant_dict_add() instead')]
#[\Since('8.4')]
function enchant_dict_add_to_personal(\EnchantDictionary $dictionary, string $word): void
{
}