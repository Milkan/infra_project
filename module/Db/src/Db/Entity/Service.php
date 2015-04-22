<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service", indexes={@ORM\Index(name="IDX_E19D9AD2D1F003E2", columns={"incident_id_incident"}), @ORM\Index(name="IDX_E19D9AD27C5A601B", columns={"id_server"}), @ORM\Index(name="IDX_E19D9AD269893C5E", columns={"id_platform"})})
 * @ORM\Entity
 */
class Service
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
     * @var \Db\Entity\Platform
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\Platform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_platform", referencedColumnName="id_platform")
     * })
     */
    private $idPlatform;

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
     * @var \Db\Entity\Incident
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\Incident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="incident_id_incident", referencedColumnName="id")
     * })
     */
    private $incidentIncident;



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
     * Set idPlatform
     *
     * @param \Db\Entity\Platform $idPlatform
     *
     * @return Service
     */
    public function setIdPlatform(\Db\Entity\Platform $idPlatform = null)
    {
        $this->idPlatform = $idPlatform;

        return $this;
    }

    /**
     * Get idPlatform
     *
     * @return \Db\Entity\Platform
     */
    public function getIdPlatform()
    {
        return $this->idPlatform;
    }

    /**
     * Set idServer
     *
     * @param \Db\Entity\Server $idServer
     *
     * @return Service
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

    /**
     * Set incidentIncident
     *
     * @param \Db\Entity\Incident $incidentIncident
     *
     * @return Service
     */
    public function setIncidentIncident(\Db\Entity\Incident $incidentIncident = null)
    {
        $this->incidentIncident = $incidentIncident;

        return $this;
    }

    /**
     * Get incidentIncident
     *
     * @return \Db\Entity\Incident
     */
    public function getIncidentIncident()
    {
        return $this->incidentIncident;
    }
}
