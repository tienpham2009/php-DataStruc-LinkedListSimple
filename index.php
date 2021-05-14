<?php
include_once "Node.php";
include_once "LinkList.php";

$linkedList = new LinkList();

$linkedList->insertFirst(1);
$linkedList->insertFirst(2);
$linkedList->insertLast(3);
$linkedList->insertLast(4);

echo $linkedList->totalNodes()."<Br>";
echo implode(",",$linkedList->readList());