<?php

include_once 'CRUD.php';


class Langue extends CRUD
{
    /**
     * @var string
     *
     * @ORM\Column(name="langues", type="string", length=45, nullable=false)
     */
    private $langues;

    /**
     * @var string
     *
     * @ORM\Column(name="mentionSecretaire", type="string", length=45, nullable=false)
     */
    private $mentionsecretaire;

    /**
     * @var string
     *
     * @ORM\Column(name="openSolution", type="string", length=100, nullable=false)
     */
    private $opensolution;

    /**
     * @var integer
     *
     * @ORM\Column(name="idLangue", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlangue;



    /**
     * Set langues
     *
     * @param string $langues
     * @return Langue
     */
    public function setLangues($langues)
    {
        $this->langues = $langues;

        return $this;
    }

    /**
     * Get langues
     *
     * @return string 
     */
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * Set mentionsecretaire
     *
     * @param string $mentionsecretaire
     * @return Langue
     */
    public function setMentionsecretaire($mentionsecretaire)
    {
        $this->mentionsecretaire = $mentionsecretaire;

        return $this;
    }

    /**
     * Get mentionsecretaire
     *
     * @return string 
     */
    public function getMentionsecretaire()
    {
        return $this->mentionsecretaire;
    }

    /**
     * Set opensolution
     *
     * @param string $opensolution
     * @return Langue
     */
    public function setOpensolution($opensolution)
    {
        $this->opensolution = $opensolution;

        return $this;
    }

    /**
     * Get opensolution
     *
     * @return string 
     */
    public function getOpensolution()
    {
        return $this->opensolution;
    }

    /**
     * Get idlangue
     *
     * @return integer 
     */
    public function getIdlangue()
    {
        return $this->idlangue;
    }

    public function __construct() {
        parent::__construct();
        $this->table="Langue";
    }
}
