<?php
include_once 'CRUD.php';


class Entreprise extends CRUD
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomEntreprise", type="string", length=90, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="diplome", type="boolean", nullable=false)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="emailEntreprise", type="string", length=60, nullable=false)
     */
    private $emailentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="TelEntreprise", type="string", length=60, nullable=false)
     */
    private $telentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=60, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=80, nullable=false)
     */
    private $siteweb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Effacer", type="boolean", nullable=false)
     */
    private $effacer;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEntreprise", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identreprise;

    /**
     * @var \AppBundle\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPa", referencedColumnName="idPays")
     * })
     */
    private $idpa;



    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     * @return Entreprise
     */
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string 
     */
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }

    /**
     * Set diplome
     *
     * @param boolean $diplome
     * @return Entreprise
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return boolean 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set emailentreprise
     *
     * @param string $emailentreprise
     * @return Entreprise
     */
    public function setEmailentreprise($emailentreprise)
    {
        $this->emailentreprise = $emailentreprise;

        return $this;
    }

    /**
     * Get emailentreprise
     *
     * @return string 
     */
    public function getEmailentreprise()
    {
        return $this->emailentreprise;
    }

    /**
     * Set telentreprise
     *
     * @param string $telentreprise
     * @return Entreprise
     */
    public function setTelentreprise($telentreprise)
    {
        $this->telentreprise = $telentreprise;

        return $this;
    }

    /**
     * Get telentreprise
     *
     * @return string 
     */
    public function getTelentreprise()
    {
        return $this->telentreprise;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Entreprise
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Entreprise
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set effacer
     *
     * @param boolean $effacer
     * @return Entreprise
     */
    public function setEffacer($effacer)
    {
        $this->effacer = $effacer;

        return $this;
    }

    /**
     * Get effacer
     *
     * @return boolean 
     */
    public function getEffacer()
    {
        return $this->effacer;
    }

    /**
     * Get identreprise
     *
     * @return integer 
     */
    public function getIdentreprise()
    {
        return $this->identreprise;
    }

    /**
     * Set idpa
     *
     * @param \AppBundle\Entity\Pays $idpa
     * @return Entreprise
     */
    public function setIdpa(\AppBundle\Entity\Pays $idpa = null)
    {
        $this->idpa = $idpa;

        return $this;
    }

    /**
     * Get idpa
     *
     * @return \AppBundle\Entity\Pays 
     */
    public function getIdpa()
    {
        return $this->idpa;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Entreprise";
    }
}
