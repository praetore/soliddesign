<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 19:55
 */

namespace Solid;


class ScrambleFormatter implements SomeFormatter
{

    public function format($text)
    {
        return str_shuffle($text);
    }
}