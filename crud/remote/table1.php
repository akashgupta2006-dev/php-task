<?php
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('Akash')
        ->addColumn(1994)
    ->addRow()
        ->addColumn('1002')
        ->addColumn('ritesh')
        ->addColumn(1983)
    ->addRow()
        ->addColumn('1003')
        ->addColumn('sandeep')
        ->addColumn(1970)
    ->display()
;
?>