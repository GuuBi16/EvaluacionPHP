<?php 

	class Arreglo extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Arreglo()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = "Areglo Recursivo";
			$data['page_title'] = "Evaluación 3 - <small> Arreglo Recursivo </small>";
			$data['page_name'] = "arreglo";
			$this->views->getView($this,"arreglo",$data);
		}

	}
 ?>