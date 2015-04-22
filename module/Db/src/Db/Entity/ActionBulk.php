<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionBulk
 *
 * @ORM\Table(name="action_bulk")
 * @ORM\Entity
 */
class ActionBulk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_action_bulk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActionBulk;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=75, nullable=false)
     */
    private $name;



    /**
     * Get idActionBulk
     *
     * @return integer
     */
    public function getIdActionBulk()
    {
        return $this->idActionBulk;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ActionBulk
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
