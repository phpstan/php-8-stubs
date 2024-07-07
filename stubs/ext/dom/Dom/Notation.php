<?php 

namespace Dom;

#[\Since('8.4')]
class Notation extends \Dom\Node
{
    /** @readonly */
    public string $publicId;
    /** @readonly */
    public string $systemId;
}