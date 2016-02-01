<?php
class LeftnavComponent extends Component {
	public $name = 'LeftnavComponent';
 
	public function casting_left_nav($casting) {
	
		$left_nav_menu=array(
		$casting['Artwork']['name'].' Essay'=>array('action'=>'essays','controller'=>'castings','?'=>array('artwork'=>$casting['Artwork']['id'])),
		'Castings'=>array('action'=>'front','controller'=>'castings','?'=>array('artwork'=>$casting['Artwork']['id'])),
		'Checklist'=>array('action'=>'essays','controller'=>'castings','?'=>array('essay'=>$casting['Artwork']['id'])),
		);
		if ($casting['Casting']['xrf']) $left_nav_menu['XRF Report']='#';
		$left_nav_menu['About/Help']=array('controller'=>'castings','action'=>'about');
		
		return $left_nav_menu;	
	}

	public function casting_global_left_nav() {
	
		$left_nav_menu=array(
		'A.P. Proctor Essay'=>array('action'=>'essays','controller'=>'castings','?'=>array('artwork'=>'proctor')),
		'All Castings'=>array('action'=>'front','controller'=>'castings')
		);
		$left_nav_menu['About/Help']=array('controller'=>'castings','action'=>'about');
		
		return $left_nav_menu;	
	}
}
?>