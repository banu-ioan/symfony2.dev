<?php

namespace Agregator\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AgregatorUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
