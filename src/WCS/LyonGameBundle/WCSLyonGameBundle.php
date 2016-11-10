<?php

namespace WCS\LyonGameBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WCSLyonGameBundle extends Bundle
{
    public function  getParent()
    {
        return 'FOSUserBundle';
    }
}

