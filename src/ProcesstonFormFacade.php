<?php

namespace Processton\ProcesstonForm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonForm\Skeleton\SkeletonClass
 */
class ProcesstonFormFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-form';
    }
}
