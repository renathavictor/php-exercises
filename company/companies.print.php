<?php
require __DIR__ . '/companies.php';

$amazon = new Company('Amazon', 1994, 'E-Commerce, Cloud', 'Internet company');
$alphabet = new Company('Alphabet Inc.', 2015, 'Search, Cloud, Advertising', 'Internet company');
$facebook = new Company('Facebook', 2004, 'Social', 'Internet company');

$companies = new Companies();
$companies->add($amazon);
$companies->add($alphabet);
$companies->add($facebook);

echo "Só uma company\n";
echo((string)$amazon."\n");
//var_dump('Amazon.........1994');

echo "companies after 2000\n";
print_r($companies->foundedAfter(2000)."\n");
$expected = "Alphabet Inc...2015
Amazon.........1994
Facebook.......2004";
//var_dump($expected);

echo "companies before 2000\n";
echo($companies->foundedBefore(2000)."\n");
//var_dump([$alphabet, $facebook]);

echo "companies\n";
echo((string)$companies."\n");
//var_dump([$amazon]);



  