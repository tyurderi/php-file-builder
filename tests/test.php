<?php

require_once __DIR__ . '/../vendor/autoload.php';

$file = new WCKZ\Generator\FileBuilder();

$file->add('<?php')->newLine(2);
$file->add('namespace %s;', 'WCKZ\\Generator')->newLine(2);

$file->add('class %s', 'Test')->newLine()->add('{')->newLine();

$file->indent()->add('function sayHello()')->newLine()->indent()->add('{')->newLine();
$file->indent(2)->add('echo \'%s\';', 'Hello World')->newLine();
$file->indent()->add('}')->newLine();

$file->add('}')->newLine();

echo $file;