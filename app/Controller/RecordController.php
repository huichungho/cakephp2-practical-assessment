<?php
	class RecordController extends AppController{
		
		public $components = array('Paginator');

		public function index(){
			ini_set('memory_limit','256M');
			set_time_limit(0);
			
			$this->setFlash('Listing Record page too slow, try to optimize it.');
			
			
			// old
			// $records = $this->Record->find('all');
			// $this->set('records',$records);


			// NEW - records pagination
			$this->Paginator->settings = array(
				'limit' => 10,
				// 'totalLimit' => NO MAX LIMIT
			);

			$records = $this->Paginator->paginate($this->Record);
			// debug($records); exit;

			$this->set('records',$records);
			$this->set('title',__('List Record'));
		}
		
		
// 		public function update(){
// 			ini_set('memory_limit','256M');
			
// 			$records = array();
// 			for($i=1; $i<= 1000; $i++){
// 				$record = array(
// 					'Record'=>array(
// 						'name'=>"Record $i"
// 					)			
// 				);
				
// 				for($j=1;$j<=rand(4,8);$j++){
// 					@$record['RecordItem'][] = array(
// 						'name'=>"Record Item $j"		
// 					);
// 				}
				
// 				$this->Record->saveAssociated($record);
// 			}
			
			
			
// 		}
	}