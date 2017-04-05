<?php
class usuario {
	
	private $name;

	public function setName($n) {
	$this->name = $n;

	}
	public function getName() {
	return $this->name;

	}


}
/* Classe para fazer herança de classes, exemplo

class Pessoa {
	private $nome;
	private $idade

	public function __construct($nome, $idade){
	$this->nome = $nome;
	$this->idade = $idade;

	}

	public function getNome(){
	return $this->nome;

	}
	public function getIdade(){
	return $this->idade;
	}

	}
	class PessoaAdapter{
	private $sexo;
	private $pessoa;

	public function __construct(Pessoa $pessoa){
	this->pessoa = $pessoa;
	}
	public function setSexo($s){
	$this->sexo = $s;


	}
	public function getSexo(){
	return $this->sexo;
	} 
	public function getNome(){
		return $this->pessoa->getNome();
	}



	}

	$pessoa = new Pessoa();
	$pessoa->setNome("João");
	

	$pa = new PessoaAdapter($pessoa);
	$pa->setSexo("Masculino");
	


*/