<style>
.casting-link{
	font-size: .95em;
	//text-transform: uppercase;
	padding-top:20px;
	font-family: TheSans_B2_5_,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: .8125em;
}
</style>
<?if (isset($artwork)):?>
<h1><?=$artwork['Artwork']['name']?> <small>Castings</small></h1>

<?else:?>
<h1>Proctor Collection Online <small>Castings</small></h1>
<?endif?>

<div class="row">
<div class="col-xs-12 col-md-10">
<?php
		echo $this->Form->create('Casting', array('url' => array_merge(array('action' => 'front'), $this->params['pass'])));
        echo $this->Form->input('searchdata', array('div' => false,'empty'=>true,'label'=>false,'class'=>'form-control','placeholder'=>'Search castings'));
?>
</div>
<div class="col-xs-12 col-md-2">
<?
        echo $this->Form->submit(__('Search', true), array('div' => false,'class'=>'form-control'));
        echo $this->Form->end();
?>
</div>
</div><!-- //search row -->




<? foreach ($castings as $casting): ?>
<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12 casting-link">

	<?
	//first extract the image based on naming parameters
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/castings/'.$file_id.'_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/castings/'.$img_file_name,array('alt'=>$casting['Owner']['creditline'],'class'=>'img-responsive','style'=>'max-height:215px'));

	//echo $main_img;
	echo $this->Html->link($main_img.'View Full Record - '.$casting['Casting']['id'], array('controller'=>'castings','action' => 'frontview',$casting['Casting']['id']),array('class'=>'sidebar-secondary','escape'=>false));
	?>

</div>

<div class="col-md-4 col-sm-6 col-xs-12 casting-link">
<strong>Provenance:</strong> <?=$casting['Casting']['provenance']?>
</div>

<div class="col-md-4 col-sm-6 col-xs-12 casting-link">
<strong>Credit line:</strong> <?=$casting['Owner']['creditline']?>
</div>




</div><!-- /castings row -->
<? endforeach; ?>




