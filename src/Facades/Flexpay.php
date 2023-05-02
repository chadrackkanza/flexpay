<?php

namespace chadrackkanza\Flexpay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \chadrackkanza\Flexpay\Flexpay
 */
class Flexpay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \chadrackkanza\Flexpay\Flexpay::class;
    }
}
