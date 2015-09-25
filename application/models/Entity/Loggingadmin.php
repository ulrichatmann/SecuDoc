<?php

include_once 'CRUD.php';

class Loggingadmin extends CRUD
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEntre", type="datetime", nullable=false)
     */
    private $dateentre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSortie", type="datetime", nullable=false)
     */
    private $datesortie;

    /**
     * @var string
     *
     * @ORM\Column(name="ipMachine", type="string", length=24, nullable=false)
     */
    private $ipmachine;

    /**
     * @var string
     *
     * @ORM\Column(name="macAdresse", type="string", length=45, nullable=true)
     */
    private $macadresse;

    /**
     * @var string
     *
     * @ORM\Column(name="osMachine", type="string", length=30, nullable=true)
     */
    private $osmachine;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAdminManagerLog", type="integer", nullable=false)
     */
    private $idadminmanagerlog;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enLigne", type="boolean", nullable=false)
     */
    private $enligne;

    /**
     * @var integer
     *
     * @ORM\Column(name="idLog", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlog;



    /**
     * Set dateentre
     *
     * @param \DateTime $dateentre
     * @return Loggingadmin
     */
    public function setDateentre($dateentre)
    {
        $this->dateentre = $dateentre;

        return $this;
    }

    /**
     * Get dateentre
     *
     * @return \DateTime 
     */
    public function getDateentre()
    {
        return $this->dateentre;
    }

    /**
     * Set datesortie
     *
     * @param \DateTime $datesortie
     * @return Loggingadmin
     */
    public function setDatesortie($datesortie)
    {
        $this->datesortie = $datesortie;

        return $this;
    }

    /**
     * Get datesortie
     *
     * @return \DateTime 
     */
    public function getDatesortie()
    {
        return $this->datesortie;
    }

    /**
     * Set ipmachine
     *
     * @param string $ipmachine
     * @return Loggingadmin
     */
    public function setIpmachine($ipmachine)
    {
        $this->ipmachine = $ipmachine;

        return $this;
    }

    /**
     * Get ipmachine
     *
     * @return string 
     */
    public function getIpmachine()
    {
        return $this->ipmachine;
    }

    /**
     * Set macadresse
     *
     * @param string $macadresse
     * @return Loggingadmin
     */
    public function setMacadresse($macadresse)
    {
        $this->macadresse = $macadresse;

        return $this;
    }

    /**
     * Get macadresse
     *
     * @return string 
     */
    public function getMacadresse()
    {
        return $this->macadresse;
    }

    /**
     * Set osmachine
     *
     * @param string $osmachine
     * @return Loggingadmin
     */
    public function setOsmachine($osmachine)
    {
        $this->osmachine = $osmachine;

        return $this;
    }

    /**
     * Get osmachine
     *
     * @return string 
     */
    public function getOsmachine()
    {
        return $this->osmachine;
    }

    /**
     * Set idadminmanagerlog
     *
     * @param integer $idadminmanagerlog
     * @return Loggingadmin
     */
    public function setIdadminmanagerlog($idadminmanagerlog)
    {
        $this->idadminmanagerlog = $idadminmanagerlog;

        return $this;
    }

    /**
     * Get idadminmanagerlog
     *
     * @return integer 
     */
    public function getIdadminmanagerlog()
    {
        return $this->idadminmanagerlog;
    }

    /**
     * Set enligne
     *
     * @param boolean $enligne
     * @return Loggingadmin
     */
    public function setEnligne($enligne)
    {
        $this->enligne = $enligne;

        return $this;
    }

    /**
     * Get enligne
     *
     * @return boolean 
     */
    public function getEnligne()
    {
        return $this->enligne;
    }

    /**
     * Get idlog
     *
     * @return integer 
     */
    public function getIdlog()
    {
        return $this->idlog;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Loggingadmin";
    }
}
