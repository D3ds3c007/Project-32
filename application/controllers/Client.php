<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
   

	public function index()
	{
        // $data['content'] = 'Client';
		// $this->load->view('page/accueil', $data);
		$data['contents'] = 'page/home';
		$data['nom'] = $this->session->userdata('nom');
		$data['idUser'] = $this->session->userdata('idUser');
		$data['objets'] = $this->Root->getOtherObjets($data['idUser']);
		$data['cat'] = $this->Objet->selectAllCat();

		$this->load->view('mainpage',$data);
	}

	public function profile()
	{
					
		$data['contents'] = 'page/profile';
		$data['nom'] = $this->session->userdata('nom');
		$data['idUser'] = $this->session->userdata('idUser');
		$data['objets'] = $this->Objet->getObjetUser($data['idUser']);
		$data['cat'] = $this->Objet->selectAllCat();

		$this->load->view('mainpage',$data);
	}

	public function detail($idObjet)
	{
		$data['contents'] = 'page/detail';
		$data['nom'] = $this->session->userdata('nom');
		$data['objet'] = $this->Objet->findObjet($idObjet);
		$data['cat'] = $this->Objet->selectAllCat();
		$this->load->view('mainpage',$data);
	}

	public function search()
	{
		$tap = $this->input->post('tap');
		$categ = $this->input->post('categ');

		$data['contents'] = 'page/home';
		$data['idUser'] = $this->session->userdata('idUser');
		$data['nom'] = $this->session->userdata('nom');
		$data['objets'] = $this->Objet->search($tap, $categ);
		$data['cat'] = $this->Objet->selectAllCat();

		$this->load->view('mainpage',$data);
		
	}

	public function exchange($idObjet)
	{
		$data['contents'] = 'page/echange';
		$data['idUser'] = $this->session->userdata('idUser');

		$data['nom'] = $this->session->userdata('nom');
		$data['objetUser1'] = $this->Objet->getObjetUser($data['idUser']);
		$data['objetUser2'] = $this->Objet->findObjet($idObjet);

		$data['cat'] = $this->Objet->selectAllCat();
		$this->load->view('mainpage',$data);

	}

	public function validate($user1, $user2, $o1, $o2)
	{
		$this->Model->proposer($user1, $o1, $user2, $o2);
		redirect('client/index');

	}

	public function proposition()
	{
		$data['contents'] = 'page/proposition';
		$data['idUser'] = $this->session->userdata('idUser');
		$data['nom'] = $this->session->userdata('nom');
		$props=$this->Model->listPropEnCours($this->session->userdata('idUser'));
		foreach($props as $prop){
			$otherProp[]=$prop['idObjet1'];
		}
		foreach($props as $prop){
			$myObj[]=$prop['idObjet2'];
		}
		$objetsss=$this->Objet->getlistobj($otherProp);
		$data['details'] = $objetsss

	
		
		// $data['detailObject'] = $this->Model->findObjet($prop[])

		// $this->load->view('mainpage',$data);
	}
	
}