<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($email,$mdp)
        {
            $sql = "SELECT * FROM users where email= ? AND mdp= ?";
            $query = $this->db->query($sql, array($email, $mdp));
            $row = $query->row_array(); 

            $valiny = false;
            if(count($row)>0)
            {
                $valiny = true;
                $this->session->set_userdata('nom', $row['nom']);
                $this->session->set_userdata('typeUser', $row['typeUser']);
                $this->session->set_userdata('idUser', $row['idUser']);

            }
            return $valiny;
        }

        public function getInfoUser($idUser)
        {
            $sql = "SELECT * FROM Users WHERE idUser = ? ";
            $query = $this->db->query($sql, $idUser);
            $row = $query->row_array();

            return $row;
        }

        public function insertUser($nom,$email,$mdp)
        {
            $sql = "INSERT INTO Users VALUES(NULL,?,?,?,1) ";
            
            $this->db->query($sql, array($nom,$email,$mdp));
        }

       
        public function checkInscri($email){
            $sql = "SELECT * FROM users WHERE email= ? ";
            $query = $this->db->query($sql, $email);
            $row = $query->row_array();

            $valiny = true;
            if(count($row)>0)
            {
                $valiny = false;
            }
            return $valiny;
        }
        public function getPropos($idUser)
        {
            $sql = "SELECT * FROM proposition WHERE idUser2 = ? AND idProp NOT IN(SELECT idProp from transac)";
            $query = $this->db->query($sql, $idUser);
            $result = $query->result_array();

            return $result;
        }
        public function listPropEnCours($idUser){
            $sql="select * from proposition where idUser2 = ? and idprop not in (select idprop from transac) ";
            $query = $this->db->query($sql, array($idUser));
            $result = $query->result_array(); 
            return $result;
        }

        public function getProposObj($idUser,$idObj)
        {
            $sql = "SELECT * FROM proposition WHERE idUser2 = ? AND idObjet2 = ? ";
            $query = $this->db->query($sql, array($idUser,$idObj));
            $result = $query->result_array();

            return $result;
        }

        public function getOnePropos($idUser1,$idObjet1,$idUser2,$idObjet2)
        {
            $sql = "SELECT idProp FROM proposition WHERE idUser1 = ? AND idObjet1 = ?
            AND idUser2 = ? AND idObjet2 = ? ";
            
            $query = $this->db->query($sql, array($idUser1,$idObjet1,$idUser2,$idObjet2));
            $row = $query->row_array();

            return $row;
        }
        
        public function proposer($idUser1,$idObjet1,$idUser2,$idObjet2){
            $sql = "INSERT INTO proposition VALUES(NULL,?,?,?,?,NOW()) ";
            $row = $this->db->query($sql, array($idUser1,$idObjet1,$idUser2,$idObjet2));
            return $sql;
        }

        public function transact($idUser1,$idObjet1,$idUser2,$idObjet2,$typeTransac){
            if($typeTransac == 0){
                changeProprio($idUser1,$idObjet2);
                changeProprio($idUser2,$idObjet1);
            }

            $idProp = getOnePropos($idUser1,$idObjet1,$idUser2,$idObjet2);

            $sql = "INSERT INTO transac VALUES(?,NOW(),?) ";
            $this->db->query($sql, array($idProp,$typeTransac));
        }

        public function changeProprio($idUser,$idObjet){
            $sql = "INSERT INTO proprio VALUES(?,?,NOW()) ";
            $this->db->query($sql, array($idUser,$idObjet));
        }

    }
?>