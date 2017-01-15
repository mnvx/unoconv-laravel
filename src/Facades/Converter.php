<?php

namespace Mnvx\UnoconvLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Mnvx\Unoconv\ConverterInterface;

class Converter extends Facade
{
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ConverterInterface::class;
    }
}