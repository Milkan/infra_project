<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Platform
 *
 * @ORM\Table(name="platform", indexes={@ORM\Index(name="IDX_3952D0CB7C5A601B", columns={"id_server"})})
 * @ORM\Entity
 */
class Platform
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_platform", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlatform;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="base_url", type="string", length=50, nullable=true)
     */
    private $baseUrl;

    /**
     * @var \Db\Entity\Server
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\Server")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_server", referencedColumnName="id_server")
     * })
     */
    private $idServer;



    /**
     * Get idPlatform
     *
     * @return integer
     */
    public function getIdPlatform()
    {
        return $this->idPlatform;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Platform
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

    /**
     * Set baseUrl
     *
     * @param string $baseUrl
     *
     * @return Platform
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Get baseUrl
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Set idServer
     *
     * @param \Db\Entity\Server $idServer
     *
     * @return Platform
     */
    public function setIdServer(\Db\Entity\Server $idServer = null)
    {
        $this->idServer = $idServer;

        return $this;
    }

    /**
     * Get idServer
     *
     * @return \Db\Entity\Server
     */
    public function getIdServer()
    {
        return $this->idServer;
    }
}
