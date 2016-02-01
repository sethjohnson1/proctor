<?$casting_url=$this->Html->link('- View all castings -',array('controller'=>'castings','action'=>'frontview','#'));
	
	$img_file_name='NONE.jpg';
	$file_search=array();
	$file_id=$casting['Artwork']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/artworks/'.$file_id.'_1200_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$casting['Artwork']['name'],'class'=>'img-responsive'));

	//echo $main_img;

?>
<div class="row">
<div class="col-xs-12">
<h2><?=$casting['Artwork']['name']?></h2>
</div>
<div class="col-xs-12 col-md-6">
<?=$main_img?>
</div>
<div class="col-xs-12 col-md-6">
<p>
ESSAY begins here
</p>
</div>
</div><!-- /row -->