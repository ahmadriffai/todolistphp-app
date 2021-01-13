<?php

require_once "../Helper/Input.php";

$name = input("Nama");
echo "Hallo $name" . PHP_EOL;

$nim = input("Nim");
echo "Your Nim : $nim" . PHP_EOL;