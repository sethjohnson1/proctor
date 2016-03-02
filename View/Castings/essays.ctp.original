<?$casting_url=$this->Html->link('- View all castings -',array('controller'=>'castings','action'=>'frontview','#'));

	$file_search=array();
	$file_id=$artwork['Artwork']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/artworks/'.$file_id.'_1200_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$artwork['Artwork']['name'],'class'=>'img-responsive'));

	echo $main_img;

?>
<div class="row">
<div class="col-xs-12">
<div class="cls"></div>
<? //single view file for the essay list and also to display them 
if (!isset($this->request->query['id'])) :
?>
<h2>Essays</h2>
<?
	//just add make array in the order wanted
	$essays=array();
	$essays[0]['id']=23725;
	$essays[0]['img']='00423.jpg';
	$essays[0]['author']='Peter H. Hassrick';
	$essays[0]['title']='“THAT HYMN OF DIVINE CRUDENESS?” FREDERIC REMINGTON THE PAINTER';
	//debug($this->request->query['id']);
	
	foreach ($essays as $essay){
		echo $this->Html->image($essay['img']);
		echo '<h2>'.
		$this->Html->link($essay['title'],array('plugin'=>'','controller'=>'castings','action'=>'essays','?'=>array('id'=>$essay['id']))).
		' - By '.$essay['author'].
		'</h2>';
		//debug($essay);
	}

	else:
	
	$essay=$this->Wordpress->get_WP($this->request->query['id']);
	if (empty($essay['content'])){
		$essay['title']='Not Found';
		$essay['content']='Apologies, that essay was not found.';
	}
	?>
	<h2><?=$casting_url?></h2>
	<h2><?=$essay['title']?></h2>
	
<?
	echo $essay['content'];
	endif;
?>
<h2><?=$casting_url?></h2>
</div>
</div><!-- /row -->