
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

/* change width to 296px for a nice 3-col layout, 218px for 4*/
.the-objects {
    float: left;
    margin: 2px;
    width: 296px;
}

.artwork-img{
	max-width:88%;
}


</style>

<div class="row header-row">
<div class="col-xs-12">
<?=$this->Html->image('Panther_banner.jpg',array('class'=>'img-responsive'));?>
</div>
</div>

<div class="row artworks-row">

<? 
$c=4;
//add Proctor to end of array
$proc['Artwork']=array('id'=>0,'name'=>'A.P. Proctor','essay_id_wp'=>123);
array_push($artworks,$proc);

foreach ($artworks as $artwork): 
//take note of the special CSS here - regular bootstrap columns tend to cause random breaks for some reason
?>
<div class="the-objects" style="padding-top:20px">
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
	$main_img=$this->Html->image('proctor_images/artworks/'.$img_file_name,array('alt'=>$artwork['Artwork']['name'],'class'=>'img-responsive less-width artwork-img'));

	//echo $main_img;
	echo '<p class="smaller">'.$this->Html->link($main_img.$artwork['Artwork']['name'], array('controller'=>'castings','action' => 'essays', '?'=>array('artwork'=> $artwork['Artwork']['id'])),array('class'=>'','escape'=>false)).'</p>';

	
	?>
</div>

</div>

<?
endforeach; ?>

</div><!-- /artworks row -->
