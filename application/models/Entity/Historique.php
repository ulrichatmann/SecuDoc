<?php

include_once 'CRUD.php';

class Historique extends CRUD
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcadreH", type="integer", nullable=false)
     */
    private $idcadreh;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=45, nullable=true)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAdmin", type="integer", nullable=false)
     */
    private $idadmin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typeAdmin", type="boolean", nullable=false)
     */
    private $typeadmin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAction", type="datetime", nullable=false)
     */
    private $dateaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHistorique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistorique;



    /**
     * Set idcadreh
     *
     * @param integer $idcadreh
     * @return Historique
     */
    public function setIdcadreh($idcadreh)
    {
        $this->idcadreh = $idcadreh;

        return $this;
    }

    /**
     * Get idcadreh
     *
     * @return integer 
     */
    public function getIdcadreh()
    {
        return $this->idcadreh;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Historique
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set idadmin
     *
     * @param integer $idadmin
     * @return Historique
     */
    public function setIdadmin($idadmin)
    {
        $this->idadmin = $idadmin;

        return $this;
    }

    /**
     * Get idadmin
     *
     * @return integer 
     */
    public function getIdadmin()
    {
        return $this->idadmin;
    }

    /**
     * Set typeadmin
     *
     * @param boolean $typeadmin
     * @return Historique
     */
    public function setTypeadmin($typeadmin)
    {
        $this->typeadmin = $typeadmin;

        return $this;
    }

    /**
     * Get typeadmin
     *
     * @return boolean 
     */
    public function getTypeadmin()
    {
        return $this->typeadmin;
    }

    /**
     * Set dateaction
     *
     * @param \DateTime $dateaction
     * @return Historique
     */
    public function setDateaction($dateaction)
    {
        $this->dateaction = $dateaction;

        return $this;
    }

    /**
     * Get dateaction
     *
     * @return \DateTime 
     */
    public function getDateaction()
    {
        return $this->dateaction;
    }

    /**
     * Get idhistorique
     *
     * @return integer 
     */
    public function getIdhistorique()
    {
        return $this->idhistorique;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Historique";
    }
}
