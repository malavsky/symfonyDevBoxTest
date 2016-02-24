<?php

namespace Application\Grossum\MenuBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationGrossumMenuBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'GrossumMenuBundle';
    }
}
