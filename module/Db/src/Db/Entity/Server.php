<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Server
 *
 * @ORM\Table(name="server")
 * @ORM\Entity
 */
class Server
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_server", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServer;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=125, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=125, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=125, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="installed_apps", type="string", length=250, nullable=false)
     */
    private $installedApps;

    /**
     * @var string
     *
     * @ORM\Column(name="base_url", type="string", length=125, nullable=false)
     */
    private $baseUrl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_automatic_platform_creation", type="boolean", nullable=false)
     */
    private $allowAutomaticPlatformCreation;



    /**
     * Get idServer
     *
     * @return integer
     */
    public function getIdServer()
    {
        return $this->idServer;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Server
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Server
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
     * Set type
     *
     * @param string $type
     *
     * @return Server
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set installedApps
     *
     * @param string $installedApps
     *
     * @return Server
     */
    public function setInstalledApps($installedApps)
    {
        $this->installedApps = $installedApps;

        return $this;
    }

    /**
     * Get installedApps
     *
     * @return string
     */
    public function getInstalledApps()
    {
        return $this->installedApps;
    }

    /**
     * Set baseUrl
     *
     * @param string $baseUrl
     *
     * @return Server
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
     * Set allowAutomaticPlatformCreation
     *
     * @param boolean $allowAutomaticPlatformCreation
     *
     * @return Server
     */
    public function setAllowAutomaticPlatformCreation($allowAutomaticPlatformCreation)
    {
        $this->allowAutomaticPlatformCreation = $allowAutomaticPlatformCreation;

        return $this;
    }

    /**
     * Get allowAutomaticPlatformCreation
     *
     * @return boolean
     */
    public function getAllowAutomaticPlatformCreation()
    {
        return $this->allowAutomaticPlatformCreation;
    }
}
