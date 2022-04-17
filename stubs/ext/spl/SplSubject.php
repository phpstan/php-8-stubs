<?php 

interface SplSubject
{
    /** @return void */
    #[\Until('8.1')]
    public function attach(SplObserver $observer);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function attach(SplObserver $observer) : void;
    /** @return void */
    #[\Until('8.1')]
    public function detach(SplObserver $observer);
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function detach(SplObserver $observer) : void;
    /** @return void */
    #[\Until('8.1')]
    public function notify();
    /** @tentative-return-type */
    #[\Since('8.1')]
    public function notify() : void;
}