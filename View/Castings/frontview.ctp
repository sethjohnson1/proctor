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
<style>
.quickfix{
	padding:10px;
}
</style>
<h2><?=$casting['Artwork']['name']?></h2>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<?

	//first extract the image based on naming parameters
	$img_file_name='NO_CASTING_AVAILABLE.jpg';
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/castings/'.$file_id.'_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
		$main_img=$this->Html->image('proctor_images/castings/'.$img_file_name,array('alt'=>$casting['Owner']['creditline'],'class'=>'img-responsive'));

		echo $this->Html->link($main_img.'Click to enlarge', Configure::read('globalSiteURL').'/img/proctor_images/castings/'.$img_file_name,array('class'=>'ajax cboxElement','escape'=>false,'style'=>'padding: 7px'));
	}
	
	else {
		echo $this->Html->image($img_file_name,array('alt'=>'No casting image available','class'=>'img-responsive'));
	}
	

?>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
<?
//build array for tables
//debug($casting['Casting']);
$cast=$casting['Casting'];
$top_section=array();
$detailed_info=array();
$top_section['Title']=$casting['Artwork']['name'];
if (!empty($cast['creditline'])) $top_section['Credit Line']=$cast['creditline'];
if (!empty($casting['Forge']['name'])) $top_section['Foundry']=$casting['Forge']['name'];
if (!empty($cast['castdate'])) $top_section['Casting Date']=$cast['castdate'];

if (!empty($cast['version'])) $detailed_info['Version']=$cast['version'];
if (!empty($cast['dimensions'])) $detailed_info['Dimensions<br/><small>(Height x Width x Length)</small>']=$cast['dimensions'];
if (!empty($cast['provenance'])) $detailed_info['Provenance']=$cast['provenance'];
if (!empty($cast['foundrymark'])) $detailed_info['Foundry Mark']=$cast['foundrymark'];
if (!empty($cast['inscription'])) $detailed_info['Inscriptions']=$cast['inscription'];
if (!empty($cast['castingmethod'])) $detailed_info['Casting Method']=$cast['castingmethod'];
if (!empty($cast['copyright'])) $detailed_info['Copyright Date']=$cast['copyright'];
//plasters TBD, but they would be here
if (!empty($cast['accnum'])) $detailed_info['Accession Number']=$cast['accnum'];
if (!empty($cast['micromeasurements'])) $detailed_info['Micro measurements']=$cast['micromeasurements'];
if (!empty($cast['commentary'])) $detailed_info['Commentary']=$cast['commentary'];
if (!empty($cast['modified'])) $detailed_info['Record modified']=date('Y-m-d',strtotime($cast['modified']));
?>
<table class="table table-striped">
<tbody>
<? foreach ($top_section as $row=>$val):
?>
 <tr> 
 <th scope="row"><?=$row?></th>
 <td><?=$val?></td> 

 </tr>
 <?
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

	$related_img=$this->Html->image('proctor_images/castings/'.$img['name'].'.jpg',array('alt'=>$casting['Artwork']['name'],'class'=>'img-responsive quickfix'));

	echo $this->Html->link($related_img.'', Configure::read('globalSiteURL').'/img/proctor_images/castings/'.$img['name'].'.jpg',array('class'=>'ajax cboxElement','escape'=>false));
	//debug($img);
?>



<?endforeach;?>

<?endif;?>
<?
//check for XRF files
$xrf_file=array();
	
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/xrf/'.$file_id.'_*.jpg');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
		$main_img=$this->Html->image('proctor_images/xrf/'.$img_file_name,array('alt'=>$casting['Owner']['creditline'],'class'=>'img-responsive'));
		$xrf_file[0]= $this->Html->link($main_img.'', Configure::read('globalSiteURL').'/img/proctor_images/xrf/'.$img_file_name,array('class'=>'ajax cboxElement','escape'=>false));
	}
	//find the PDF
	$file_search=array();
	$file_id=$casting['Casting']['id'];
	$file_search=glob(WWW_ROOT.'/img/proctor_images/xrf/'.$file_id.'_*.pdf');
	if (isset($file_search[0])){
		$file_path=explode('/',$file_search[0]);
		$img_file_name= end($file_path);
		$xrf_file[1]= $this->Html->link('Download full report', Configure::read('globalSiteURL').'/img/proctor_images/xrf/'.$img_file_name);	
	}
	
	if (!empty($xrf_file)){
		echo '<h3>X-ray fluoroscopy</h3>';
		if (isset($xrf_file[0])) echo $xrf_file[0];
		if (isset($xrf_file[1])) echo $xrf_file[1];
	}
?>
</div><!-- other images column -->



<div class="col-xs-12 col-sm-12<?=$info_col_pull?>">
<h3>Detailed info</h3>
<table class="table table-striped casting-link">
<tbody>
<? foreach ($detailed_info as $row=>$val):?>
 <tr> 
 <th scope="row"><?=$row?></th>
 <td><?=$val?></td> 

 </tr>
 <?endforeach;?>

 </tbody>
 </table>
</div><!-- / casting data column -->



</div><!-- /casting second row -->
