<?php
class Book
{
    public $isbn;
    public $title;
    public $author;
    public $available;

    public function getPrintableTible() {
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= ' Not Available';
        }
        return $result;
    }
    public function getCopy() {
        if($this->available < 1){
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
}

$harry_potter = new Book();
$harry_potter->isbn = 989437943894; 
$harry_potter->title = "Harry Potter and the Prisioner of Askabam"; 
$harry_potter->author = "JK"; 
$harry_potter->available = 10; 

if($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title. '<br>';
} else {
    echo 'Sorry its gone!';
}

var_dump($harry_potter);

?>