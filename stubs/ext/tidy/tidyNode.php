<?php 

final class tidyNode
{
    private function __construct()
    {
    }
    public function hasChildren(): bool
    {
    }
    public function hasSiblings(): bool
    {
    }
    public function isComment(): bool
    {
    }
    public function isHtml(): bool
    {
    }
    public function isText(): bool
    {
    }
    public function isJste(): bool
    {
    }
    public function isAsp(): bool
    {
    }
    public function isPhp(): bool
    {
    }
    public function getParent(): ?tidyNode
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getPreviousSibling(): ?tidyNode
    {
    }
    #[\Since('8.5')]
    public function getPreviousSibling(): ?tidyNode
    {
    }
    #[\Since('8.4')]
    #[\Until('8.5')]
    public function getNextSibling(): ?tidyNode
    {
    }
    #[\Since('8.5')]
    public function getNextSibling(): ?tidyNode
    {
    }
}