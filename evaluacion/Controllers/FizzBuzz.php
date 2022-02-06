<?php 

	class FizzBuzz extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function FizzBuzz()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "FizzBuzz";
			$data['page_title'] = "Evaluación 1 - <small> FizzBuzz </small>";
			$data['page_name'] = "fizzbuzz";
			$this->views->getView($this,"fizzbuzz",$data);
		}

	}
 ?>