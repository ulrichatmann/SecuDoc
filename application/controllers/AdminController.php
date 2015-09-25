<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    
    public function consulterAbonnement(){
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/consulter_abonnement');
        $this->load->view('admin/footer');
        

    }
    
    public function nouvelAbonnement(){
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/creer_abonnement');
        $this->load->view('admin/footer');
        

    }
    
    public function consulterEntreprises(){
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/consulter_entreprise');
        $this->load->view('admin/footer');
        

    }
    
    public function creerCompteEntreprise(){
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/creer_compte_entreprise');
        $this->load->view('admin/footer');
        

    }
    
    
}