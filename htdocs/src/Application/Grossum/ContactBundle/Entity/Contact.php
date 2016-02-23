<?php

namespace Application\Grossum\ContactBundle\Entity;

use Grossum\ContactBundle\Entity\BaseContact as BaseContact;

class Contact extends BaseContact
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
