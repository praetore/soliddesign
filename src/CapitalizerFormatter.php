<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 12-6-16
 * Time: 18:27
 */

namespace Solid;


class CapitalizerFormatter implements SomeFormatter
{
    public function capitalize($text)
    {
        return strtoupper($text);
    }

    public function format($text)
    {
        return $this->capitalize($text);
    }
}