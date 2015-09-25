<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CRUD
 *
 * @author BEACHLOVER
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class CRUD extends CI_Model{
    
    protected $table="";
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
     public   function create($options_echappees=array(),$options_non_echappees=array())
     {
         if(empty($options_echappees)AND empty($options_non_echappees))
         {
             return -1;
         }
         else {
             $alex= $this->db->set($options_echappees)
                 ->set($options_non_echappees,null,false)
                 ->insert($this->table);
             if($alex)
             {
                 return $insert_id = $this->db->insert_id();
             }
             else {
                 return -1;
             }
         }  
     }

     public function read($select='*',$where=array(),$nb=null,$debut=null)
     {
        $dsaj= $this->db->select($select)
                         ->from($this->table)
                         ->where($where)
                         ->limit($nb,$debut)
                         ->get()
                         ->result();
         
       //return $this->ConvertToArrayObject($dsaj);
       return $dsaj;
     }

     public  function update($where,$options_echappees=array(),$options_non_echappees=array())
     {
         if(is_integer($where))
         {
             $id = "id".$this->table;
             $where =array($id => $where);
         }
         return (bool)  $this->db->set($options_echappees)
                                 ->set($options_non_echappees,null,false)
                                 ->where($where)
                                 ->update($this->table);
     }
     public function delete($where=array())
     {
         return (bool)  $this->db->where($where)
                                 ->delete($this->table);
     }
     public function count($champ=array(),$valeur=null)
     {
         return (int)  $this->db->where($champ,$valeur)
                                ->from($this->table)
                                ->count_all_results();
     }
     //abstract function ConvertToArrayObject($datas);
}
