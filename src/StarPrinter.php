<?php

/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 18:19
 */

namespace Solid;

class StarPrinter implements Printer
{
    public function printWithStars($text)
    {
        return "****" . $text . "****";
    }

    public function printStuff($text)
    {
        return $this->printWithStars($text);
    }
}