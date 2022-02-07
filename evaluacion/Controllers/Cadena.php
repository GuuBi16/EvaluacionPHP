<?php 

	class Cadena extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Cadena()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Cadena de Texto";
			$data['page_title'] = "Evaluación 2 - <small> Cadena de Texto </small>";
			$data['page_name'] = "cadena";
			$this->views->getView($this,"cadena",$data);
		}

	}
 ?>