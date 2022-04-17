<?php 

interface SplSubject
{
    /** @tentative-return-type */
    public function attach(SplObserver $observer);
    /** @tentative-return-type */
    public function detach(SplObserver $observer);
    /** @tentative-return-type */
    public function notify();
}