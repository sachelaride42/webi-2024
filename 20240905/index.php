<?php

include_once('imc.class.php');

$obj = new Imc();
$obj->setNome("Felipe");
$obj->setPeso(90);
$obj->setAltura(1.75);

echo $obj->getInfo();