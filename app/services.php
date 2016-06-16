<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 20:58
 */


use Symfony\Component\DependencyInjection\Definition;

$container->setParameter('stars', new Definition('Solid\StarPrinter'));
$container->setParameter('scrambler', new Definition('Solid\ScrambleFormatter'));
$container->setParameter('dashes', new Definition('Solid\DashPrinter'));
$container->setParameter('capitalizer', new Definition('Solid\CapitalizerFormatter'));

$container->register('starScrambler', 'Solid\Wrapper')
    ->addArgument('%stars%')
    ->addArgument('%scrambler%');
$container->register('dashScrambler', 'Solid\Wrapper')
    ->addArgument('%dashes%')
    ->addArgument('%scrambler%');
$container->register('dashCapitalizer', 'Solid\Wrapper')
    ->addArgument('%dashes%')
    ->addArgument('%capitalizer%');
$container->register('starCapitalizer', 'Solid\Wrapper')
    ->addArgument('%stars%')
    ->addArgument('%capitalizer%');