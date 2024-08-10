<?php

// can be single or double quote

echo 'Nama: ';

echo "Fakhri Rossi";

// to format \n for enter, \t for tab, use double quote
echo "\nAddress\t: ";
echo "\tJakarta\n";


// Multiline string: Heredoc

echo <<<ROSSI

Hello,
Learn PHP Basic
This is the way to create multiline string


ROSSI;

// Multiline string: Heredoc

echo <<<'ROSSI'
  \nHello,
Learn PHP Basic
This is the way to create multiline string
ROSSI;