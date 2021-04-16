<?php

namespace Sparkout\ModuleUserAuth;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sparkout\ModuleUserAuth\ModuleUserAuth
 */
class ModuleUserAuthFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'module-user-auth';
    }
}
