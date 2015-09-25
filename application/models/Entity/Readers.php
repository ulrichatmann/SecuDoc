<?php

include_once 'CRUD.php';


class Readers extends CRUD
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTimbre", type="integer", nullable=false)
     */
    private $idtimbre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLecture", type="datetime", nullable=false)
     */
    private $datelecture;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=60, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="ipAdresse", type="string", length=20, nullable=true)
     */
    private $ipadresse;

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=60, nullable=true)
     */
    private $os;

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=60, nullable=true)
     */
    private $platform;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=15, nullable=true)
     */
    private $langue;

    /**
     * @var integer
     *
     * @ORM\Column(name="idReaders", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreaders;



    /**
     * Set idtimbre
     *
     * @param integer $idtimbre
     * @return Readers
     */
    public function setIdtimbre($idtimbre)
    {
        $this->idtimbre = $idtimbre;

        return $this;
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
     * Set datelecture
     *
     * @param \DateTime $datelecture
     * @return Readers
     */
    public function setDatelecture($datelecture)
    {
        $this->datelecture = $datelecture;

        return $this;
    }

    /**
     * Get datelecture
     *
     * @return \DateTime 
     */
    public function getDatelecture()
    {
        return $this->datelecture;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Readers
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set ipadresse
     *
     * @param string $ipadresse
     * @return Readers
     */
    public function setIpadresse($ipadresse)
    {
        $this->ipadresse = $ipadresse;

        return $this;
    }

    /**
     * Get ipadresse
     *
     * @return string 
     */
    public function getIpadresse()
    {
        return $this->ipadresse;
    }

    /**
     * Set os
     *
     * @param string $os
     * @return Readers
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set platform
     *
     * @param string $platform
     * @return Readers
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return string 
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return Readers
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Get idreaders
     *
     * @return integer 
     */
    public function getIdreaders()
    {
        return $this->idreaders;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Readers";
    }
}
