<?php

include_once "Node.php";
class Queue
{
    private $font;
    private $back;

    public function __construct()
    {
        $this->back = null;
        $this->font = null;
    }

    public function isEmpty(){
        return empty($this->font);
    }
    public function enqueue($value){
      $node = new Node($value);
      if ($this->font == null){
          $node->next = $this->font;
          $this->font = $node;
          if ($this->back == null){
              $this->back = $node;
          }
      }else{
          $this->back->next = $node;
          $node->next = null;
          $this->back = $node;
      }
    }
    public function dequeue(){
        if ($this->isEmpty()){
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}