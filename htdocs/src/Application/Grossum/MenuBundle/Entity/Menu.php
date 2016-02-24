<?php

namespace Application\Grossum\MenuBundle\Entity;

use Grossum\MenuBundle\Entity\BaseMenu as BaseMenu;

class Menu extends BaseMenu
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
