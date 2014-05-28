<?php

namespace ItoSoftware\Components\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ItoUserBundle extends Bundle
{
    
    public function getParent() 
    {
        return 'HWIOAuthBundle';
    }
}
