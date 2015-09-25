<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class PortailController extends CI_Controller {
    public function signIn(){//pour se connecter
        $this->load->view('portail/header');
        $this->load->view('portail/login');
        $this->load->view('portail/footer');
    }
    public function signUp(){//pour s'inscrire
        $this->load->view('portail/header');
        $this->load->view('portail/register');
        $this->load->view('portail/footer');
    }
}