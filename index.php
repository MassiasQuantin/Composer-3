<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Salut, je suis une meuuuh !');
$bessie->setTongue('U');

echo $bessie;
