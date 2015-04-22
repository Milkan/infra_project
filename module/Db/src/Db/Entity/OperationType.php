<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationType
 *
 * @ORM\Table(name="operation_type")
 * @ORM\Entity
 */
class OperationType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_operation_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOperationType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;



    /**
     * Get idOperationType
     *
     * @return integer
     */
    public function getIdOperationType()
    {
        return $this->idOperationType;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OperationType
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
