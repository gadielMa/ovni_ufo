<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

// symfony server:start

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
