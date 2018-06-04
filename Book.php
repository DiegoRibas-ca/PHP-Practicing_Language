<?php
class Book
{
    public $isbn;
    public $title;
    public $author;
    public $available;
}

$harry_potter = new Book();
$harry_potter->isbn = 989437943894; 
$harry_potter->title = "Harry Potter and the Prisioner of Askabam"; 
$harry_potter->author = "JK"; 
$harry_potter->available = 10; 
var_dump($harry_potter);

?>