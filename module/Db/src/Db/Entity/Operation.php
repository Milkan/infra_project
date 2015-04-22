<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table(name="operation", indexes={@ORM\Index(name="IDX_1981A66D16E1B6DC", columns={"operation_type_id_operation_type"}), @ORM\Index(name="IDX_1981A66D8D93D649", columns={"user"})})
 * @ORM\Entity
 */
class Operation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_operation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOperation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="server_alias", type="string", length=80, nullable=true)
     */
    private $serverAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="platform_name", type="string", length=45, nullable=true)
     */
    private $platformName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_dongle_id", type="string", length=45, nullable=true)
     */
    private $userDongleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="log", type="text", nullable=true)
     */
    private $log;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_execution", type="datetime", nullable=true)
     */
    private $dateExecution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="success_message", type="text", nullable=true)
     */
    private $successMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="failed_message", type="text", nullable=true)
     */
    private $failedMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="group_token", type="text", nullable=true)
     */
    private $groupToken;

    /**
     * @var string
     *
     * @ORM\Column(name="pending", type="text", nullable=true)
     */
    private $pending;

    /**
     * @var \Db\Entity\OperationType
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\OperationType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operation_type_id_operation_type", referencedColumnName="id_operation_type")
     * })
     */
    private $operationTypeOperationType;

    /**
     * @var \Db\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Db\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id_user")
     * })
     */
    private $user;



    /**
     * Get idOperation
     *
     * @return integer
     */
    public function getIdOperation()
    {
        return $this->idOperation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Operation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set serverAlias
     *
     * @param string $serverAlias
     *
     * @return Operation
     */
    public function setServerAlias($serverAlias)
    {
        $this->serverAlias = $serverAlias;

        return $this;
    }

    /**
     * Get serverAlias
     *
     * @return string
     */
    public function getServerAlias()
    {
        return $this->serverAlias;
    }

    /**
     * Set platformName
     *
     * @param string $platformName
     *
     * @return Operation
     */
    public function setPlatformName($platformName)
    {
        $this->platformName = $platformName;

        return $this;
    }

    /**
     * Get platformName
     *
     * @return string
     */
    public function getPlatformName()
    {
        return $this->platformName;
    }

    /**
     * Set userDongleId
     *
     * @param string $userDongleId
     *
     * @return Operation
     */
    public function setUserDongleId($userDongleId)
    {
        $this->userDongleId = $userDongleId;

        return $this;
    }

    /**
     * Get userDongleId
     *
     * @return string
     */
    public function getUserDongleId()
    {
        return $this->userDongleId;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Operation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set log
     *
     * @param string $log
     *
     * @return Operation
     */
    public function setLog($log)
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get log
     *
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set dateExecution
     *
     * @param \DateTime $dateExecution
     *
     * @return Operation
     */
    public function setDateExecution($dateExecution)
    {
        $this->dateExecution = $dateExecution;

        return $this;
    }

    /**
     * Get dateExecution
     *
     * @return \DateTime
     */
    public function getDateExecution()
    {
        return $this->dateExecution;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Operation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set successMessage
     *
     * @param string $successMessage
     *
     * @return Operation
     */
    public function setSuccessMessage($successMessage)
    {
        $this->successMessage = $successMessage;

        return $this;
    }

    /**
     * Get successMessage
     *
     * @return string
     */
    public function getSuccessMessage()
    {
        return $this->successMessage;
    }

    /**
     * Set failedMessage
     *
     * @param string $failedMessage
     *
     * @return Operation
     */
    public function setFailedMessage($failedMessage)
    {
        $this->failedMessage = $failedMessage;

        return $this;
    }

    /**
     * Get failedMessage
     *
     * @return string
     */
    public function getFailedMessage()
    {
        return $this->failedMessage;
    }

    /**
     * Set groupToken
     *
     * @param string $groupToken
     *
     * @return Operation
     */
    public function setGroupToken($groupToken)
    {
        $this->groupToken = $groupToken;

        return $this;
    }

    /**
     * Get groupToken
     *
     * @return string
     */
    public function getGroupToken()
    {
        return $this->groupToken;
    }

    /**
     * Set pending
     *
     * @param string $pending
     *
     * @return Operation
     */
    public function setPending($pending)
    {
        $this->pending = $pending;

        return $this;
    }

    /**
     * Get pending
     *
     * @return string
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Set operationTypeOperationType
     *
     * @param \Db\Entity\OperationType $operationTypeOperationType
     *
     * @return Operation
     */
    public function setOperationTypeOperationType(\Db\Entity\OperationType $operationTypeOperationType = null)
    {
        $this->operationTypeOperationType = $operationTypeOperationType;

        return $this;
    }

    /**
     * Get operationTypeOperationType
     *
     * @return \Db\Entity\OperationType
     */
    public function getOperationTypeOperationType()
    {
        return $this->operationTypeOperationType;
    }

    /**
     * Set user
     *
     * @param \Db\Entity\User $user
     *
     * @return Operation
     */
    public function setUser(\Db\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Db\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
