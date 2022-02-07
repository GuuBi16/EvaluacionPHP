<?php 

	class Matriz extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Matriz()
		{
			$data['page_id'] = 5;
			$data['page_tag'] = "Matriz Transpuesta";
			$data['page_title'] = "Evaluación 4 - <small> Matriz Transpuesta </small>";
			$data['page_name'] = "matriz";
			$this->views->getView($this,"matriz",$data);
		}

	}
 ?>