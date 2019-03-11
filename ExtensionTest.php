<?php

include('User.php');
include('Employee.php');

$zuza = new Employee( 'zuza', 'zuza@op.pl', 2000, 'tester' );
Employee::changeSallary(200);
$extension = Employee::getExtension();
$serializedExtension = serialize($extension);

$extension = serialize($extension);
file_put_contents('extensionFile.txt', $serializedExtension);
$unserializedExtension = unserialize(file_get_contents('extensionFile.txt'));
var_dump($unserializedExtension);