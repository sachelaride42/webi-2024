<?php
namespace Felipe\Composer;

require '../vendor/autoload.php';

use Symfony\Component\String\ByteString;

$foo = new ByteString('hello');

echo $foo->toString();