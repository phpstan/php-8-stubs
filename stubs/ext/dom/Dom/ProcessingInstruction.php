<?php 

namespace Dom;

#[\Since('8.4')]
class ProcessingInstruction extends \Dom\CharacterData
{
    /** @readonly */
    public string $target;
}