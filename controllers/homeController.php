<?php
class homeController extends controller {

	
	public function index(){
		$dados = array();

	$this->loadTemplate('home/home', $dados);	
	}
	public function sobre(){
		$dados = array();

	$this->loadTemplate('home/sobre', $dados);	
	}

	
}