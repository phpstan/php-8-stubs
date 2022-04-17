<?php 

/** @generate-class-entries */
interface SplObserver
{
    /** @return void */
    #[\Until('8.1')]
    public function update(SplSubject $subject);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function update(SplSubject $subject) : void;
}