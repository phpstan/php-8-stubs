<?php 

namespace Dom;

#[\Since('8.4')]
class Entity extends \Dom\Node
{
    /** @readonly */
    public ?string $publicId;
    /** @readonly */
    public ?string $systemId;
    /** @readonly */
    public ?string $notationName;
}