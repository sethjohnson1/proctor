
<style>
.artwork-link{
	font-size: .95em;
	text-transform: uppercase;
}
.artworks-row{
	margin-left: 50px;
}

.header-row{
	margin: 0 -46px 0 -46px;
}



</style>

<div class="row header-row">
<div class="col-xs-12">
<?=$this->Html->image('Panther_banner.jpg',array('class'=>'img-responsive'));?>
</div>
</div>

<div class="row artworks-row">
<? 
$c=0;
//add Proctor to end of array
$proc['Artwork']=array('id'=>0,'name'=>'A.P. Proctor','essay_id_wp'=>123);
array_push($artworks,$proc);

foreach ($artworks as $artwork): 
$c++;
if ($c==4) echo '<div class="row">';
?>
<div class="col-xs-3" style="padding-top:20px">
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
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$artwork['Artwork']['name'],'class'=>'img-responsive less-width'));

	//echo $main_img;
	echo '<p class="smaller">'.$this->Html->link($main_img.$artwork['Artwork']['name'], array('controller'=>'castings','action' => 'essays', '?'=>array('artwork'=> $artwork['Artwork']['id'])),array('class'=>'','escape'=>false)).'</p>';

	
	?>
</div>
</div><!-- artwork row -->

<? 
if ($c==4){ echo '</div>'; $c=0;}
endforeach; ?>

</div><!-- /artworks row -->
