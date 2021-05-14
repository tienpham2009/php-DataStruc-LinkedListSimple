<?php


class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    /**
     * @return int
     */
   public function count(): int
   {
       if ($this->firstNode > 0){
           for ($i = 1 ; $i <= $this->firstNode ; $i++){
               $this->count ++;
           }
           return $this->count;
       }else {
           die("ERROR in ArrayList.get");
       }
   }

   public function insertFirst($data): void
   {
       $node = new Node($data);
       $node->link = $this->firstNode;
       $this->firstNode = $node;

       if (is_null($this->lastNode)){
           $this->lastNode = $node;
       }

       $this->count++;
   }

   public function insertLast($data): void
   {
       if (!is_null($this->firstNode)){
           $node = new Node($data);
           $this->lastNode->link = $node;
           $node->link = null;
           $this->lastNode = $node;
           $this->count++;
       }else {
           $this->insertFirst($data);
       }

   }

   public function totalNodes():int
   {
       return $this->count;
   }

   public function readList(): array
   {
       $listData = [];
       $current = $this->firstNode;

       while (!is_null($current)){
           array_push($listData, $current->readNode());
           $current = $current->link;
       }
       return $listData;
   }



}