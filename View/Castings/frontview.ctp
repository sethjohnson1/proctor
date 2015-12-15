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

	echo $main_img;
	//echo $this->Html->link($main_img.'View Full Record - '.$casting['Casting']['id'], array('controller'=>'castings','action' => 'frontview',$casting['Casting']['id']),array('class'=>'sidebar-secondary','escape'=>false));

?>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artwork'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casting['Artwork']['name'], array('controller' => 'artworks', 'action' => 'view', $casting['Artwork']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casting['Owner']['id'], array('controller' => 'owners', 'action' => 'view', $casting['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaster'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casting['Plaster']['name'], array('controller' => 'plasters', 'action' => 'view', $casting['Plaster']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Castnumber'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['castnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acqdate'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['acqdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creditline'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['creditline']); ?>
			&nbsp;
		</dd>
</dl>
</div>
</div><!-- big row -->
<div class="row">
<div class="col-xs-12 col-sm-6">
<h2>Detailed info</h2>
	<dl>

		<dt><?php echo __('Metallurgy'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['metallurgy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xrf'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['xrf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provenance'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['provenance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimensions'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['dimensions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commentary'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['commentary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Castingmethod'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['castingmethod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idnumbers'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['idnumbers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plasters'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['plasters']); ?>
			&nbsp;
		</dd>
	</dl>

</div><!-- / casting data column -->
<div class="col-xs-12 col-sm-6">
<h2>Other images</h2>
</div>
</div><!-- /casting public view row -->
