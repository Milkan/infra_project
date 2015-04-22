<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionBulkTarget
 *
 * @ORM\Table(name="action_bulk_target", indexes={@ORM\Index(name="IDX_1D6B805187986D5A", columns={"action_bulk"}), @ORM\Index(name="IDX_1D6B80513952D0CB", columns={"platform"}), @ORM\Index(name="IDX_1D6B80515A6DD5F6", columns={"server"})})
 * @ORM\Entity
 */
class ActionBulkTarget
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_action_bulk_target", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActionBulkTarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="action_type", type="integer", nullable=true)
     */
    private $actionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var \Db\Entity\Platform
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\Platform")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="platform", referencedColumnName="id_platform")
     * })
     */
    private $platform;

    /**
     * @var \Db\Entity\Server
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\Server")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="server", referencedColumnName="id_server")
     * })
     */
    private $server;

    /**
     * @var \Db\Entity\ActionBulk
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\ActionBulk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_bulk", referencedColumnName="id_action_bulk")
     * })
     */
    private $actionBulk;



    /**
     * Get idActionBulkTarget
     *
     * @return integer
     */
    public function getIdActionBulkTarget()
    {
        return $this->idActionBulkTarget;
    }

    /**
     * Set actionType
     *
     * @param integer $actionType
     *
     * @return ActionBulkTarget
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return integer
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set order
     *
     * @param integer $order
     *
     * @return ActionBulkTarget
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set platform
     *
     * @param \Db\Entity\Platform $platform
     *
     * @return ActionBulkTarget
     */
    public function setPlatform(\Db\Entity\Platform $platform = null)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return \Db\Entity\Platform
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set server
     *
     * @param \Db\Entity\Server $server
     *
     * @return ActionBulkTarget
     */
    public function setServer(\Db\Entity\Server $server = null)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return \Db\Entity\Server
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set actionBulk
     *
     * @param \Db\Entity\ActionBulk $actionBulk
     *
     * @return ActionBulkTarget
     */
    public function setActionBulk(\Db\Entity\ActionBulk $actionBulk = null)
    {
        $this->actionBulk = $actionBulk;

        return $this;
    }

    /**
     * Get actionBulk
     *
     * @return \Db\Entity\ActionBulk
     */
    public function getActionBulk()
    {
        return $this->actionBulk;
    }
}
