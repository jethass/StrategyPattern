<?php
function autoload($class)
{
  if (file_exists($path = $class . '.php'))
  {
    require $path;
  }
}

spl_autoload_register('autoload');

$writer = new FileWriter(new XMLFormater, 'file.html');
$writer->write('Hello world !');