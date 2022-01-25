<?php
class Books{
    /* Member variables */
    var $price;
    var $title;
    var $author;

    /* Member functions */
    function setPrice($par){
        $this->price = $par;
    }
    function getPrice(){
        echo $this->price ."<br/>";
    }
    function setName($par){
        $this->title = $par;
    }
    function getName(){
        echo $this->title ." <br/>";
    }
    function setAuthor($author){
        $this->author = $author;
    }
    function getAuthor(){
        echo $this->author ." <br/>";
    }
}


