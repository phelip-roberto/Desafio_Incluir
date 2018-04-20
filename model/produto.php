<?php
	class produto{
		private $id;//campo de auto incrementado pelo banco de dados
		private $nome;
		private $qtd;
		private $preco;
		private $tipo;
		private $getArrayProduto;
    	static $campos = array("id", "nome", "qtd", "preco");


		public function __construct() {
        	$this->arrayProduto = array("id" => &$this->id, "nome" => &$this->nome, "qtd" => &$this->qtd, "preco" => &$this->preco);
    	}

    	public function atribuirDados($nome, $qtd, $preco) {
    		$this->id = $id;
    		$this->nome = $nome;
	        $this->qtd = $qtd;
	        $this->preco = $preco;
	    }

	    public function atribuirDadosArray($dados) {
	        foreach (self::$campos as $campo) {
	            $this->arrayProduto[$campo] = $dados[$campo];
	        }
	    }

	    public function getArrayProduto() {
	        return $this->arrayProduto;
	    }

	    public function getId(){
	    	return $this->$id;
	    }

	    public function getNome(){
	    	return $this->$nome;
	    }

	    public function getQtd(){
	    	return $this->$qtd;
	    }

	    public function getPreco(){
	    	return $this->$preco;
	    }

	    public function setNome($nome){
	    	$this->nome = $nome;
	    }

	    public function setQtd($qtd){
	    	$this->qtd = $qtd;
	    }

	    public function setPreco($preco){
	    	$this->preco = $preco;
	    }

	    public function calcularPreco($preco, $qtd){
	    	$subTotal = $preco * $qtd;
	    	return $subTotal;
	    }

	}