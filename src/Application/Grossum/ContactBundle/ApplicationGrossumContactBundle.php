<?php

namespace Application\Grossum\ContactBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationGrossumContactBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'GrossumContactBundle';
    }
}
