<?php

class Customer {
    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function getFirstName() {
        return $this->firstname;
    }
    public function getSurName() {
        return $this->surname;
    }
    public function getFullName() {
        return strtoupper($this->firstname . ' ' . $this->surname);
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }
}