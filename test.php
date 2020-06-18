<?php

require_once('Vogel.php');
require_once('Vis.php');
require_once('Freek.php');

echo '<hr>';
echo 'Vogel';
echo '<hr>';

$vogel = new Vogel();
$vogel->eet();
$vogel->eet();
$vogel->slaap();
$vogel->eet();
$vogel->wakker();
$vogel->praat();

echo '<br>';
echo '<hr>';
echo 'Vis';
echo '<hr>';

$vis = new Vis();
$vis->eet();
$vis->eet();
$vis->slaap();
$vis->eet();
$vis->wakker();
$vis->praat();

echo '<br>';
echo '<hr>';
echo 'Freek';
echo '<hr>';

$freek = new Freek();
$freek->geefEten('Vis');
$freek->geefEten('vogel');
$freek->geefEten('Kat');
$freek->brengNaarBed('Vis');
$freek->brengNaarBed('vogel');
$freek->brengNaarBed('Kat');