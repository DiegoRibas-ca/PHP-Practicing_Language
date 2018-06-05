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



