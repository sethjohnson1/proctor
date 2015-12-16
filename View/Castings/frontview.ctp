<?
echo $this->Html->script('jquery.colorbox');
echo $this->Html->css('colorbox');

?>

<script>
$(document).ready(function(){
//set defaults
cbw="100%";
cbh="75%";
//override if screen wider than tall
if ($( window ).width()>=$( window ).height()){
	cbw="80%";
	cbh="90%";
}
	var $gallery=$(".ajax").colorbox({rel:'ajax',width:cbw,height:cbh,opacity:0.75,current:"Viewing picture {current} of {total}"});

	


});
</script>
<h2>[title area]</h2>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<?

	//first extract the image based on naming parameters
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/castings/'.$file_id.'_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/castings/'.$img_file_name,array('alt'=>$casting['Owner']['creditline'],'class'=>'img-responsive'));

	echo $this->Html->link($main_img.'Click to enlarge', Configure::read('globalSiteURL').'/img/proctor_images/castings/'.$img_file_name,array('class'=>'ajax cboxElement','escape'=>false));

?>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
<?
//debug($casting['Casting']);
?>
<table class="table table-striped">
<tbody>
<? $x=0;foreach ($casting['Casting'] as $row=>$val):
if ($x<6):?>
 <tr> 
 <th scope="row"><?=$row?></th>
 <td><?=$val?></td> 

 </tr>
 <?
 $x++;
 endif;
 endforeach;?>

 </tbody>
 </table>
 </div>
 </div><!-- /first row with image -->

<div class="row">
<?
$info_col_push=' col-md-4 col-md-push-8';
$info_col_pull=' col-md-8 col-md-pull-4';
if (empty($casting['Relatedimage'][0]['name']) && empty($casting['Casting']['xrf'])){
 $info_col_push='';
 $info_col_pull='';
}
 ?>
<div class="col-xs-12 col-sm-12<?=$info_col_push?>">
<?if (!empty($casting['Relatedimage'][0]['name'])):?>
<h3>Other images</h3>

<?foreach ($casting['Relatedimage'] as $img):

	$related_img=$this->Html->image('proctor_images/castings/'.$img['name'].'.jpg',array('alt'=>$casting['Artwork']['name'],'class'=>'img-responsive'));

	echo $this->Html->link($related_img.'', Configure::read('globalSiteURL').'/img/proctor_images/castings/'.$img['name'].'.jpg',array('class'=>'ajax cboxElement','escape'=>false));
	//debug($img);
?>



<?endforeach;?>

<?endif;?>
<?if ($casting['Casting']['xrf']):?>
<h3>X-ray fluoroscopy</h3>
<?

	//first extract the image based on naming parameters
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/xrf/'.$file_id.'_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
	}
	$main_img=$this->Html->image('proctor_images/xrf/'.$img_file_name,array('alt'=>$casting['Owner']['creditline'],'class'=>'img-responsive'));

	echo $this->Html->link($main_img.'', Configure::read('globalSiteURL').'/img/proctor_images/xrf/'.$img_file_name,array('class'=>'ajax cboxElement','escape'=>false));
	echo $this->Html->link('Download full report (?)','#',array('class'=>'','escape'=>false));

?>
<?endif;?>
<?//debug($casting['Relatedimage'])?>


</div><!-- other images column -->



<div class="col-xs-12 col-sm-12<?=$info_col_pull?>">
<h3>Detailed info</h3>
<table class="table table-striped casting-link">
<tbody>
<? $x=0;foreach ($casting['Casting'] as $row=>$val):
if ($x>=6):?>
 <tr> 
 <th scope="row"><?=$row?></th>
 <td><?=$val?></td> 

 </tr>
 <?

 endif;
 $x++;
 endforeach;?>

 </tbody>
 </table>
</div><!-- / casting data column -->



</div><!-- /casting second row -->
