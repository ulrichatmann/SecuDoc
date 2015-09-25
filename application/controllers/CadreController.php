<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class CadreController extends CI_Controller {
  
    public function consulterTimbres(){//menu consulter ses timbres
        $this->load->view('cadre/header');
        $this->load->view('cadre/menu');
        $this->load->view('cadre/consulter_timbres');
        $this->load->view('cadre/footer');
    }
    public function consulterHistLoggings(){//menu consulter l'historique de ses loggings
        $this->load->view('cadre/header');
        $this->load->view('cadre/menu');
        $this->load->view('cadre/consulter_hist_loggings');
        $this->load->view('cadre/footer');
    }
}