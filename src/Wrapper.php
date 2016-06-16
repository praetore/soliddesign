<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 18:56
 */

namespace Solid;


class Wrapper implements Printer
{
    /**
     * @var SomeFormatter
     */
    private $cap;
    /**
     * @var Printer
     */
    private $printer;

    /**
     * Wrapper constructor.
     * @param Printer $printer
     * @param SomeFormatter $cap
     */
    public function __construct(Printer $printer, SomeFormatter $cap)
    {
        $this->cap = $cap;
        $this->printer = $printer;
    }

    public function printStuff($text)
    {
        $out = $this->cap->format($text);
        $out = $this->printer->printStuff($out);
        return $out . "\n";
    }
}