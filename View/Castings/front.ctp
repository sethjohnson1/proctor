<style>
.artwork-link{
	font-size: .95em;
	text-transform: uppercase;
}
</style>
<h3>[big image here if you want, not sure it needs it]</h3>
<h1>Proctor Online Collection <small>check out Stalking Panther</small></h1>

<div class="row">

<? foreach ($castings as $casting): ?>
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" style="padding-top:20px">
<div class="sidebar-secondary artwork-link">
	<?
	//first extract the image based on naming parameters
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/castings/'.$file_id.'_main_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$casting['Casting']['name'],'class'=>'img-responsive'));

	//echo $main_img;
	echo $this->Html->link($main_img.$casting['Casting']['name'], array('action' => 'view', $casting['Casting']['id']),array('class'=>'sidebar-secondary','escape'=>false));

	
	?>
</div>
</div><!-- artwork row -->

<? endforeach; ?>

</div><!-- /artworks row -->
