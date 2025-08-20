<?php 

/** @deprecated */
#[\Until('8.4')]
function enchant_broker_free_dict(\EnchantDictionary $dictionary): bool
{
}
#[\Deprecated(since: '8.0', message: 'as EnchantDictionary objects are freed automatically')]
#[\Since('8.4')]
function enchant_broker_free_dict(\EnchantDictionary $dictionary): bool
{
}