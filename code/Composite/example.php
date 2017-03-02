<?php

require __DIR__ . '/../../vendor/autoload.php';

$billsPC = new \Composite\CompositePart('PC for Bill');
$motherboard = new \Composite\CompositePart('Intel Motherboard');

$CdRom = new \Composite\Part('CD Rom');
$CdRom->setPrice(100);

$cpu = new \Composite\Part('CPU');
$cpu->setPrice(1000);

$gpu = new \Composite\Part('GPU');
$gpu->setPrice(500);

$motherboard->add($cpu);
$motherboard->add($gpu);

$billsPC->add($motherboard);
$billsPC->add($CdRom);

echo "\nPC costs: {$billsPC->getPrice()} \n";
echo "{$billsPC->getAllParts()} \n";
