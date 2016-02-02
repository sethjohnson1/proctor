
<style>
.artwork-link{
	font-size: .95em;
	text-transform: uppercase;
}
.artworks-row{
	margin-left: 50px;
}
</style>
<h3>[full-width image here]</h3>

<div class="row artworks-row">

<? foreach ($artworks as $artwork): ?>
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="padding-top:20px">
<div class="sidebar-secondary artwork-link grow-proc">
	<?
	//first extract the image based on naming parameters
	$file_search=array();
	$file_id=$artwork['Artwork']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/artworks/'.$file_id.'_288_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$artwork['Artwork']['name'],'class'=>'img-responsive'));

	//echo $main_img;
	echo $this->Html->link($main_img.$artwork['Artwork']['name'], array('controller'=>'castings','action' => 'essays', '?'=>array('artwork'=> $artwork['Artwork']['id'])),array('class'=>'','escape'=>false));

	
	?>
</div>
</div><!-- artwork row -->

<? endforeach; ?>

</div><!-- /artworks row -->
