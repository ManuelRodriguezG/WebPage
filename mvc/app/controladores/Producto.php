<?php 
	class Producto extends Controlador{
		public function __construct(){
			echo 'Controlador Pagina cargada Producto';
		}

		public function index(){
			$this->vista("producto");
		}
	}
?>