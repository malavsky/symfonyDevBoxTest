<?php

namespace Application\Grossum\ContactBundle\Entity;

use Grossum\ContactBundle\Entity\BasePhone as BasePhone;

class Phone extends BasePhone
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
