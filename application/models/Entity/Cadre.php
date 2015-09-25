<?php

include_once 'CRUD.php';

class Cadre extends CRUD
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=60, nullable=false)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=85, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=45, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=45, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statusLogin", type="boolean", nullable=false)
     */
    private $statuslogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInsertion", type="date", nullable=false)
     */
    private $dateinsertion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Effacer", type="boolean", nullable=false)
     */
    private $effacer;

    /**
     * @var string
     *
     * @ORM\Column(name="timezones", type="string", length=40, nullable=false)
     */
    private $timezones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XQRcodePlus", type="boolean", nullable=false)
     */
    private $xqrcodeplus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="YQRcodePlus", type="boolean", nullable=false)
     */
    private $yqrcodeplus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TailleQRcodePlus", type="boolean", nullable=false)
     */
    private $tailleqrcodeplus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PositionM", type="boolean", nullable=false)
     */
    private $positionm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NoMessage", type="boolean", nullable=false)
     */
    private $nomessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCadre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcadre;

    /**
     * @var \AppBundle\Entity\Entreprise
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Entreprise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEntrepriseCa", referencedColumnName="idEntreprise")
     * })
     */
    private $identrepriseca;

    /**
     * @var \AppBundle\Entity\Langue
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Langue")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLangueCa", referencedColumnName="idLangue")
     * })
     */
    private $idlangueca;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Cadre", inversedBy="idcadres")
     * @ORM\JoinTable(name="secretaire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCadreS", referencedColumnName="idCadre")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idSecretaire", referencedColumnName="idCadre")
     *   }
     * )
     */
    private $idsecretaire;

    /**
     * Constructor
     */
    public function __construct()
    {
        //$this->idsecretaire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idsecretaire = array();
        parent::__construct();
        $this->table="Cadre";
    }


    /**
     * Set nom
     *
     * @param string $nom
     * @return Cadre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set poste
     *
     * @param string $poste
     * @return Cadre
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cadre
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

    /**
     * Set tel
     *
     * @param string $tel
     * @return Cadre
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Cadre
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Cadre
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set statuslogin
     *
     * @param boolean $statuslogin
     * @return Cadre
     */
    public function setStatuslogin($statuslogin)
    {
        $this->statuslogin = $statuslogin;

        return $this;
    }

    /**
     * Get statuslogin
     *
     * @return boolean 
     */
    public function getStatuslogin()
    {
        return $this->statuslogin;
    }

    /**
     * Set dateinsertion
     *
     * @param \DateTime $dateinsertion
     * @return Cadre
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
     * Set effacer
     *
     * @param boolean $effacer
     * @return Cadre
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
     * Set timezones
     *
     * @param string $timezones
     * @return Cadre
     */
    public function setTimezones($timezones)
    {
        $this->timezones = $timezones;

        return $this;
    }

    /**
     * Get timezones
     *
     * @return string 
     */
    public function getTimezones()
    {
        return $this->timezones;
    }

    /**
     * Set xqrcodeplus
     *
     * @param boolean $xqrcodeplus
     * @return Cadre
     */
    public function setXqrcodeplus($xqrcodeplus)
    {
        $this->xqrcodeplus = $xqrcodeplus;

        return $this;
    }

    /**
     * Get xqrcodeplus
     *
     * @return boolean 
     */
    public function getXqrcodeplus()
    {
        return $this->xqrcodeplus;
    }

    /**
     * Set yqrcodeplus
     *
     * @param boolean $yqrcodeplus
     * @return Cadre
     */
    public function setYqrcodeplus($yqrcodeplus)
    {
        $this->yqrcodeplus = $yqrcodeplus;

        return $this;
    }

    /**
     * Get yqrcodeplus
     *
     * @return boolean 
     */
    public function getYqrcodeplus()
    {
        return $this->yqrcodeplus;
    }

    /**
     * Set tailleqrcodeplus
     *
     * @param boolean $tailleqrcodeplus
     * @return Cadre
     */
    public function setTailleqrcodeplus($tailleqrcodeplus)
    {
        $this->tailleqrcodeplus = $tailleqrcodeplus;

        return $this;
    }

    /**
     * Get tailleqrcodeplus
     *
     * @return boolean 
     */
    public function getTailleqrcodeplus()
    {
        return $this->tailleqrcodeplus;
    }

    /**
     * Set positionm
     *
     * @param boolean $positionm
     * @return Cadre
     */
    public function setPositionm($positionm)
    {
        $this->positionm = $positionm;

        return $this;
    }

    /**
     * Get positionm
     *
     * @return boolean 
     */
    public function getPositionm()
    {
        return $this->positionm;
    }

    /**
     * Set nomessage
     *
     * @param boolean $nomessage
     * @return Cadre
     */
    public function setNomessage($nomessage)
    {
        $this->nomessage = $nomessage;

        return $this;
    }

    /**
     * Get nomessage
     *
     * @return boolean 
     */
    public function getNomessage()
    {
        return $this->nomessage;
    }

    /**
     * Get idcadre
     *
     * @return integer 
     */
    public function getIdcadre()
    {
        return $this->idcadre;
    }

    /**
     * Set identrepriseca
     *
     * @param \AppBundle\Entity\Entreprise $identrepriseca
     * @return Cadre
     */
    public function setIdentrepriseca(\AppBundle\Entity\Entreprise $identrepriseca = null)
    {
        $this->identrepriseca = $identrepriseca;

        return $this;
    }

    /**
     * Get identrepriseca
     *
     * @return \AppBundle\Entity\Entreprise 
     */
    public function getIdentrepriseca()
    {
        return $this->identrepriseca;
    }

    /**
     * Set idlangueca
     *
     * @param \AppBundle\Entity\Langue $idlangueca
     * @return Cadre
     */
    public function setIdlangueca(\AppBundle\Entity\Langue $idlangueca = null)
    {
        $this->idlangueca = $idlangueca;

        return $this;
    }

    /**
     * Get idlangueca
     *
     * @return \AppBundle\Entity\Langue 
     */
    public function getIdlangueca()
    {
        return $this->idlangueca;
    }

    /**
     * Add idsecretaire
     *
     * @param \AppBundle\Entity\Cadre $idsecretaire
     * @return Cadre
     */
    public function addIdsecretaire(\AppBundle\Entity\Cadre $idsecretaire)
    {
        $this->idsecretaire[] = $idsecretaire;

        return $this;
    }

    /**
     * Remove idsecretaire
     *
     * @param \AppBundle\Entity\Cadre $idsecretaire
     */
    public function removeIdsecretaire(\AppBundle\Entity\Cadre $idsecretaire)
    {
        $this->idsecretaire->removeElement($idsecretaire);
    }

    /**
     * Get idsecretaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdsecretaire()
    {
        return $this->idsecretaire;
    }
}
