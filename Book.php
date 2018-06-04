<?php
class Book
{
    public $isbn;
    public $title;
    public $author;
    public $available;
    
    public function __contruct(int $isbn, string $title, string $author, int $available = 0) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function __toString() {
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= ' Not Available';
        }
        return $result;
    }

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

$harry_potter = new Book(989437943894, "Harry Potter and the Prisioner of Askabam", "JK", 10);
// $harry_potter->isbn = 989437943894; 
// $harry_potter->title = "Harry Potter and the Prisioner of Askabam"; 
// $harry_potter->author = "JK"; 
// $harry_potter->available = 10; 

if($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title. '<br>';
} else {
    echo 'Sorry its gone!';
}

echo $harry_potter;

?>