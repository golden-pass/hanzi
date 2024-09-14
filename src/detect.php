<?php
namespace GoldenPass\Hanzi;

class Detect
{
    /**
     * @param $character
     * @return bool
     */
    public function exec($character)
    {
        return preg_match("/^[\x{4e00}-\x{9fa5}]+$/u", $character);
    }
}
