<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D649319CB05B", columns={"dongle_no"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="dongle_no", type="string", length=10, nullable=false)
     */
    private $dongleNo;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=90, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_role", type="string", length=45, nullable=false)
     */
    private $userRole;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;



    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set dongleNo
     *
     * @param string $dongleNo
     *
     * @return User
     */
    public function setDongleNo($dongleNo)
    {
        $this->dongleNo = $dongleNo;

        return $this;
    }

    /**
     * Get dongleNo
     *
     * @return string
     */
    public function getDongleNo()
    {
        return $this->dongleNo;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userRole
     *
     * @param string $userRole
     *
     * @return User
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
