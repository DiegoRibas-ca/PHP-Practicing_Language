<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

$harry_potter = new Book(989437943894, "Harry Potter and the Prisioner of Askabam", "JK", 10);

$first_customer = new Customer(1, "Diego", "Ribas", "diego@gmail.com");

echo $harry_potter;

var_dump($first_customer);