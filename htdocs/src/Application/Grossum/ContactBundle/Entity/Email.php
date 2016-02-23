<?php

namespace Application\Grossum\ContactBundle\Entity;

use Grossum\ContactBundle\Entity\BaseEmail as BaseEmail;

class Email extends BaseEmail
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
