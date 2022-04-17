<?php 

class SplQueue extends \SplDoublyLinkedList
{
    /**
     * @tentative-return-type
     * @implementation-alias SplDoublyLinkedList::push
     */
    public function enqueue(mixed $value)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplDoublyLinkedList::shift
     */
    public function dequeue()
    {
    }
}