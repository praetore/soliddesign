<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 18:17
 */

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;


require_once "../vendor/autoload.php";

$container = new ContainerBuilder();
$loader = new PhpFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.php');

$text = "Hello World!";

$printer = $container->get('dashScrambler');
echo $printer->printStuff($text);

$printer = $container->get('starScrambler');
echo $printer->printStuff($text);

$printer = $container->get('starCapitalizer');
echo $printer->printStuff($text);

$printer = $container->get('dashCapitalizer');
echo $printer->printStuff($text);