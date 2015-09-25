<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {

    function __construct() {
            parent::__construct();
            // Chargement des ressources pour tout le contrôleur
            $this->load->model("Entity/Abonnement");
            $this->load->model("Entity/Administrator");
            $this->load->model("Entity/Cadre");
            $this->load->model("Entity/Entreprise");
            $this->load->model("Entity/Historique");
            $this->load->model("Entity/Langue");
            $this->load->model("Entity/Logging");
            $this->load->model("Entity/Loggingadmin");
            $this->load->model("Entity/Pays");
            $this->load->model("Entity/Readers");
            $this->load->model("Entity/Timbre");
        }

    public function index(){

        $data = array(
            "all_data" => array(
                "abonnements" => $this->Abonnement->read(),
                "administrators" => $this->Administrator->read(),
                "cadres" => $this->Cadre->read(),
                "entreprises" => $this->Entreprise->read(),
                "historique" => $this->Historique->read(),
                "langue" => $this->Langue->read(),
                "logging" => $this->Logging->read(),
                "loggingadmin" => $this->Loggingadmin->read(),
                "pays" => $this->Pays->read(),
                "readers" => $this->Readers->read(),
                "timbres" => $this->Timbre->read(),
            ),
            "specific_data" => array(
                "abonnements" => $this->Abonnement->read("datePaiement"),
                "administrators" => $this->Administrator->read("password"),
                "cadres" => $this->Cadre->read("statusLogin"),
                "entreprises" => $this->Entreprise->read("TelEntreprise"),
                "historique" => $this->Historique->read("idCadreH"),
                "langue" => $this->Langue->read("openSolution"),
                "logging" => $this->Logging->read("dateSortie"),
                "loggingadmin" => $this->Loggingadmin->read("osMachine"),
                "pays" => $this->Pays->read("nomPays"),
                "readers" => $this->Readers->read("idTimbre"),
                "timbres" => $this->Timbre->read("institution"),
            ),
        );

        $this->load->view('entreprise/header', $data);
        $this->load->view('entreprise/menu');
        $this->load->view('entreprise/index');
        $this->load->view('entreprise/footer');
    }

    public function creerAbonnement(){
        $this->load->view('entreprise/header');
        $this->load->view('entreprise/menu');
        $this->load->view('entreprise/souscrire_abonnement');
        $this->load->view('entreprise/footer');
    }

    public function creerCadre(){
        $this->load->view('entreprise/header');
        $this->load->view('entreprise/menu');
        $this->load->view('entreprise/creer_cadre');
        $this->load->view('entreprise/footer');
    }

    public function consulterAbonnements(){
        $this->load->view('entreprise/header');
        $this->load->view('entreprise/menu');
        $this->load->view('entreprise/consulter_abonnements');
        $this->load->view('entreprise/footer');
    }

    public function consulterCadres(){
        $this->load->view('entreprise/header');
        $this->load->view('entreprise/menu');
        $this->load->view('entreprise/consulter_cadres');
        $this->load->view('entreprise/footer');
    }
}