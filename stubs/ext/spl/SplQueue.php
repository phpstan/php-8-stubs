<?php 

class SplQueue extends \SplDoublyLinkedList
{
    /**
     * @return void
     * @implementation-alias SplDoublyLinkedList::push
     */
    #[\Until('8.1')]
    public function enqueue(mixed $value)
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplDoublyLinkedList::push
     */
    #[\Since('8.1')]
    public function enqueue(mixed $value) : void
    {
    }
    /**
     * @return mixed
     * @implementation-alias SplDoublyLinkedList::shift
     */
    #[\Until('8.1')]
    public function dequeue()
    {
    }
    /**
     * @tentative-return-type
     * @implementation-alias SplDoublyLinkedList::shift
     */
    #[\Since('8.1')]
    public function dequeue() : mixed
    {
    }
}