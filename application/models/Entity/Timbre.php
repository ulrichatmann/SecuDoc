<?php

include_once 'CRUD.php';


class Timbre extends CRUD
{
    /**
     * @var string
     *
     * @ORM\Column(name="objetDocument", type="string", length=200, nullable=false)
     */
    private $objetdocument;

    /**
     * @var string
     *
     * @ORM\Column(name="Destinataire", type="string", length=150, nullable=false)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=150, nullable=false)
     */
    private $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="adresset", type="string", length=150, nullable=false)
     */
    private $adresset;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEmissionDoc", type="string", length=20, nullable=false)
     */
    private $dateemissiondoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalPage", type="integer", nullable=false)
     */
    private $totalpage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInsertion", type="datetime", nullable=false)
     */
    private $dateinsertion;

    /**
     * @var string
     *
     * @ORM\Column(name="autreInfoDoc", type="text", nullable=true)
     */
    private $autreinfodoc;

    /**
     * @var string
     *
     * @ORM\Column(name="natureDoc", type="string", length=100, nullable=false)
     */
    private $naturedoc;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=100, nullable=false)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=180, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=40, nullable=false)
     */
    private $mention;

    /**
     * @var string
     *
     * @ORM\Column(name="dateNaissLieuPays", type="string", length=120, nullable=false)
     */
    private $datenaisslieupays;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Effacer", type="boolean", nullable=false)
     */
    private $effacer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="pageImportante", type="string", length=40, nullable=false)
     */
    private $pageimportante;

    /**
     * @var string
     *
     * @ORM\Column(name="nrDoc", type="string", length=40, nullable=false)
     */
    private $nrdoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTimbre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtimbre;

    /**
     * @var \AppBundle\Entity\Cadre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cadre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCadreT", referencedColumnName="idCadre")
     * })
     */
    private $idcadret;



    /**
     * Set objetdocument
     *
     * @param string $objetdocument
     * @return Timbre
     */
    public function setObjetdocument($objetdocument)
    {
        $this->objetdocument = $objetdocument;

        return $this;
    }

    /**
     * Get objetdocument
     *
     * @return string 
     */
    public function getObjetdocument()
    {
        return $this->objetdocument;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     * @return Timbre
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string 
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set institution
     *
     * @param string $institution
     * @return Timbre
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string 
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set adresset
     *
     * @param string $adresset
     * @return Timbre
     */
    public function setAdresset($adresset)
    {
        $this->adresset = $adresset;

        return $this;
    }

    /**
     * Get adresset
     *
     * @return string 
     */
    public function getAdresset()
    {
        return $this->adresset;
    }

    /**
     * Set dateemissiondoc
     *
     * @param string $dateemissiondoc
     * @return Timbre
     */
    public function setDateemissiondoc($dateemissiondoc)
    {
        $this->dateemissiondoc = $dateemissiondoc;

        return $this;
    }

    /**
     * Get dateemissiondoc
     *
     * @return string 
     */
    public function getDateemissiondoc()
    {
        return $this->dateemissiondoc;
    }

    /**
     * Set totalpage
     *
     * @param integer $totalpage
     * @return Timbre
     */
    public function setTotalpage($totalpage)
    {
        $this->totalpage = $totalpage;

        return $this;
    }

    /**
     * Get totalpage
     *
     * @return integer 
     */
    public function getTotalpage()
    {
        return $this->totalpage;
    }

    /**
     * Set dateinsertion
     *
     * @param \DateTime $dateinsertion
     * @return Timbre
     */
    public function setDateinsertion($dateinsertion)
    {
        $this->dateinsertion = $dateinsertion;

        return $this;
    }

    /**
     * Get dateinsertion
     *
     * @return \DateTime 
     */
    public function getDateinsertion()
    {
        return $this->dateinsertion;
    }

    /**
     * Set autreinfodoc
     *
     * @param string $autreinfodoc
     * @return Timbre
     */
    public function setAutreinfodoc($autreinfodoc)
    {
        $this->autreinfodoc = $autreinfodoc;

        return $this;
    }

    /**
     * Get autreinfodoc
     *
     * @return string 
     */
    public function getAutreinfodoc()
    {
        return $this->autreinfodoc;
    }

    /**
     * Set naturedoc
     *
     * @param string $naturedoc
     * @return Timbre
     */
    public function setNaturedoc($naturedoc)
    {
        $this->naturedoc = $naturedoc;

        return $this;
    }

    /**
     * Get naturedoc
     *
     * @return string 
     */
    public function getNaturedoc()
    {
        return $this->naturedoc;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     * @return Timbre
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Timbre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set mention
     *
     * @param string $mention
     * @return Timbre
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string 
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set datenaisslieupays
     *
     * @param string $datenaisslieupays
     * @return Timbre
     */
    public function setDatenaisslieupays($datenaisslieupays)
    {
        $this->datenaisslieupays = $datenaisslieupays;

        return $this;
    }

    /**
     * Get datenaisslieupays
     *
     * @return string 
     */
    public function getDatenaisslieupays()
    {
        return $this->datenaisslieupays;
    }

    /**
     * Set effacer
     *
     * @param boolean $effacer
     * @return Timbre
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
     * Set type
     *
     * @param boolean $type
     * @return Timbre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set pageimportante
     *
     * @param string $pageimportante
     * @return Timbre
     */
    public function setPageimportante($pageimportante)
    {
        $this->pageimportante = $pageimportante;

        return $this;
    }

    /**
     * Get pageimportante
     *
     * @return string 
     */
    public function getPageimportante()
    {
        return $this->pageimportante;
    }

    /**
     * Set nrdoc
     *
     * @param string $nrdoc
     * @return Timbre
     */
    public function setNrdoc($nrdoc)
    {
        $this->nrdoc = $nrdoc;

        return $this;
    }

    /**
     * Get nrdoc
     *
     * @return string 
     */
    public function getNrdoc()
    {
        return $this->nrdoc;
    }

    /**
     * Get idtimbre
     *
     * @return integer 
     */
    public function getIdtimbre()
    {
        return $this->idtimbre;
    }

    /**
     * Set idcadret
     *
     * @param \AppBundle\Entity\Cadre $idcadret
     * @return Timbre
     */
    public function setIdcadret(\AppBundle\Entity\Cadre $idcadret = null)
    {
        $this->idcadret = $idcadret;

        return $this;
    }

    /**
     * Get idcadret
     *
     * @return \AppBundle\Entity\Cadre 
     */
    public function getIdcadret()
    {
        return $this->idcadret;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Timbre";
    }
}
