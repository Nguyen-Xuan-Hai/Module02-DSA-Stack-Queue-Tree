<?php


class Stack
{
    private $stack;
    private $newStack;
    public function __construct()
    {
        $this->stack = array();
        $this->newStack = array();
    }

    /**
     * @return array
     */
    public function getNewStack(): array
    {
        return $this->newStack;
    }

    /**
     * @return array
     */
    public function getStack(): array
    {
        return $this->stack;
    }
    function push($value){
        array_push($this->stack,$value);
    }
    function pop(){
        $arr = array_pop($this->stack);
        array_push($this->newStack,$arr);
    }
}