<?php

namespace swede2k\XenforoBridge;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'xenforobridge';
    }
}