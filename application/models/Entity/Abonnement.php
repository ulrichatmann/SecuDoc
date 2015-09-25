<?php
include_once 'CRUD.php';

class Abonnement extends CRUD
{

    private $idAbonnement;

    private $montant;

    private $maxPages;

    private $datePaiement;

    private $dateRenouvellement;

    private $nomResponsable;

    private $Tel;

    private $email;

    private $pageCompter;

    private $idEntrepriseA;

    private $Expirer;



    public function __construct() {
        parent::__construct();
        $this->table="Abonnement";
    }
}
