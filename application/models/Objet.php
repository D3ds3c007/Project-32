<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Objet extends CI_Model 
    {
        public function findObjet($idObj)
        {
            $sql = "SELECT * from objetprop WHERE idObjet = ?";
            $query = $this->db->query($sql, $idObj);
            $row = $query->row_array();

            return $row;
        }

        public function getObjetUser($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser = ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function getOtherObjets($idUser)
        {
            $sql = "SELECT * FROM objetprop WHERE idUser != ?";
            $query = $this->db->query($sql , $idUser);
            $result = $query->result_array(); 

            return $result;
        }

        public function selectAllCat()
        {
            $sql = "SELECT * FROM categorie";

            $query = $this->db->query($sql);
            $result = $query->result_array();

            return $result;
        }

        public function selectCatId($nom)
        {
            $sql = "SELECT id FROM categorie WHERE nomCat = ? ";

            $query = $this->db->query($sql, $nom);
            $row = $query->row_array();

            return $row;
        }

        public function insertObjet($nom,$descri,$categ,$valeur,$cover)
        {
            $sql = "INSERT INTO Obj VALUES(NULL,?,?,?,?,?)";
            $this->db->query($sql, array($nom,$descri,$categ,$valeur,$cover));
        }

        public function search($tap,$categ){
            if(strcmp($categ,'Tous')==0){
                $sql = "SELECT * FROM objet WHERE descri LIKE '%?%' OR nom LIKE '%?%'";
            }
            // else{
            //     $sql = "SELECT * FROM Objetprop WHERE descri LIKE '%?%' OR nom LIKE '%?%'
            //     AND nomCat = '".$categ."'";
            // }

            $query = $this->db->query($sql, $tap, $tap);
            $result = $query->result_array();

            return $result;
        }

        public function listPropEnCours($idUser){
            $sql="select * from proposition where idUser2 = ? and idprop not in (select idprop from transac) ";
            $query = $this->db->query($sql, array($idUser));
            $result = $query->result_array(); 
            return $result;
        }
 public function getlistobj($listIdObj){
            $str=implode(",", $listIdObj);

            $sql = "SELECT * FROM objetprop WHERE idObjet in (".$str.")";
            $query = $this->db->query($sql);
            $result = $query->result_array(); 
            return $result;
        }

    }
?>