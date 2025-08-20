<?php 

/** @deprecated */
#[\Until('8.4')]
function enchant_broker_free(\EnchantBroker $broker): bool
{
}
#[\Deprecated(since: '8.0', message: 'as EnchantBroker objects are freed automatically')]
#[\Since('8.4')]
function enchant_broker_free(\EnchantBroker $broker): bool
{
}