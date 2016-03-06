<?php
class LeftnavComponent extends Component {
	public $name = 'LeftnavComponent';
 
	public function casting_left_nav($casting) {
	
		$left_nav_menu=array(
		$casting['Artwork']['name'].' Essay'=>array('action'=>'essays','controller'=>'castings','?'=>array('artwork'=>$casting['Artwork']['id'])),
		'Castings'=>array('action'=>'front','controller'=>'castings','?'=>array('artwork'=>$casting['Artwork']['id'])),
		'Checklist'=>array('action'=>'essays','controller'=>'castings','?'=>array('artwork'=>$casting['Artwork']['id'])),
		);
		
		//find the PDF
		$file_search=array();
		$file_id=$casting['Casting']['id'];
		$file_search=glob(WWW_ROOT.'/img/proctor_images/xrf/'.$file_id.'_*.pdf');
		if (isset($file_search[0])){
			$file_path=explode('/',$file_search[0]);
			$img_file_name= end($file_path);
			$left_nav_menu['XRF Report']=Configure::read('globalSiteURL').'/img/proctor_images/xrf/'.$img_file_name;
		}
		
		
		
		$left_nav_menu['About/Help']=array('controller'=>'castings','action'=>'about');
		
		return $left_nav_menu;	
	}

	public function casting_global_left_nav() {
	
		$left_nav_menu=array(
		'Home'=>array('controller'=>'artworks','action'=>'front'),
		'A.P. Proctor Essay'=>array('action'=>'essays','controller'=>'castings','?'=>array('artwork'=>'proctor')),
		'All Castings'=>array('action'=>'front','controller'=>'castings')
		);
		$left_nav_menu['About/Help']=array('controller'=>'castings','action'=>'about');
		
		return $left_nav_menu;	
	}
}
?>