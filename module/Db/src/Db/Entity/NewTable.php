<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewTable
 *
 * @ORM\Table(name="new_table")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class NewTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return NewTable
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
	
	 /**
     * @ORM\PrePersist
     */
    function prePersist() {
		$this->setNom("bip persist");
    }
	
	/**
     * @ORM\PreUpdate
     */
    function preUpdate() {
		$this->setNom("bip preup");
    }
	
	/**
     * @ORM\PreRemove
     */
    function preRemove() {
		file_put_contents("ahahah.txt", "preRemove");
    }
	
	
	
}
