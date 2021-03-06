<?if (isset($artwork)):?>
<h1><?=$artwork['Artwork']['name']?> <small>Castings</small></h1>

<?else:?>
<h1>Proctor Collection Online <small>Castings</small></h1>
<?endif?>

<?if (!isset($this->request->query['artwork'])):?>
<div class="row">
<div class="col-xs-12 col-md-10">
<?php
		echo $this->Form->create('Casting', array('url' => array_merge(array('action' => 'front','?'=>array('artwork'=>$this->request['query']['artwork'])), $this->params['pass'])));
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
<?endif?>
<div class="row">
<div class="col-xs-12">
<? 
$cnt =$this->Number->format($this->Paginator->counter(array('format' => __('{:count}'))));
echo $this->Paginator->counter(array('format' => __('Viewing records {:start} to {:end} out of '.$cnt)));
?>
</div>
</div><!-- paging row -->

<? foreach ($castings as $casting): ?>
<div class="row" style="padding-top:15px">
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<?
	//first extract the image based on naming parameters
	//this will make ERROR 500 if $img_file_name is empty when called below, so this should be the "no image available" one
	$img_file_name='NONE.jpg';
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/castings/'.$file_id.'_*.jpg');
//	debug(WWW_ROOT.'img/proctor_images/castings/'.$file_id.'_*.jpg');
//	debug($file_search);
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	//debug($img_file_name);

$main_img=$this->Html->image('proctor_images/castings/'.$img_file_name,array('alt'=>$casting['Owner']['creditline'],'class'=>'img-responsive','style'=>'max-height:215px'));

	//echo $main_img;
	echo $this->Html->link($main_img, array('controller'=>'castings','action' => 'frontview',$casting['Casting']['id']),array('class'=>'casting-link','escape'=>false));
	?>
</div>
<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
<table class="table table-striped casting-link">
<tbody>


<? foreach ($casting['Casting'] as $row=>$val){?>

 <?if ($row=='id'||$row=='creditline'||$row=='foundrymark'||$row=='dimensions'){?>
 <tr><th scope="row"><?=$row?></th>
 <td><?=$val?></td></tr>
 <?}?>

 <?}?>

   </tbody>
 </table>
 <?=$this->Html->link('View full casting record &raquo;', array('controller'=>'castings','action' => 'frontview',$casting['Casting']['id']),array('class'=>'casting-link','escape'=>false));?>
 </div>
</div><!-- //casting row -->
 <?endforeach;?>
 
 <?=$this->element('paging')?>

