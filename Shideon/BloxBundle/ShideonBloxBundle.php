<?php

namespace Shideon\BloxBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ShideonBloxBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
