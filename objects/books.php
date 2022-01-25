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
$programming = new book();
$dataStructures = new book();
$cyberSecurity = new book();

$programming ->setName( "Introduction to java programming for dummies" );
$dataStructures ->setName( "Algorithms and data structures" );
$cyberSecurity->setName("Cyber Security for experts");

$programming->setAuthor("Bucky Roberts");

	$programming ->setPrice(3400 );
	$dataStructures ->setPrice( 65000 );
	$cyberSecurity ->setPrice( 180000 );

//	Now you call another member functions to get the values set by in above example
	$programming->getName();
	$dataStructures->getName();
	$cyberSecurity->getName();

$programming->getAuthor();

	$programming->getPrice();
	$dataStructures->getPrice();
	$cyberSecurity->getPrice();
	?>

