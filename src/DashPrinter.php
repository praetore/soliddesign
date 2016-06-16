<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 18:22
 */

namespace Solid;


class DashPrinter implements Printer
{
    public function outputWithDashes($input)
    {
        return "---" . $input . "---";
    }

    public function printStuff($text)
    {
        return $this->outputWithDashes($text);
    }
}