<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

$harry_potter = new Book(989437943894, "Harry Potter and the Prisioner of Askabam", "JK", 10);

$first_customer = new Customer(1, "Diego", "Ribas", "diego@gmail.com");
$first_customer = new Customer(null, "Simon", "Ribas", "Simon@gmail.com");
$first_customer = new Customer(5, "Thiago", "Ribas", "thiago@gmail.com");

echo $harry_potter;

var_dump($first_customer->getFullName());
var_dump($first_customer->setEmail('diegoribas@gmail.com'));

$first_customer::getLastId();

Customer::getLastId();