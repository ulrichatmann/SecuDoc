<?php

include_once 'CRUD.php';


class Pays extends CRUD
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomPays", type="string", length=50, nullable=false)
     */
    private $nompays;

    /**
     * @var integer
     *
     * @ORM\Column(name="idPays", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpays;



    /**
     * Set nompays
     *
     * @param string $nompays
     * @return Pays
     */
    public function setNompays($nompays)
    {
        $this->nompays = $nompays;

        return $this;
    }

    /**
     * Get nompays
     *
     * @return string 
     */
    public function getNompays()
    {
        return $this->nompays;
    }

    /**
     * Get idpays
     *
     * @return integer 
     */
    public function getIdpays()
    {
        return $this->idpays;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Pays";
    }
}
