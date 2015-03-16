<div class="artworks form">
<?php echo $this->Form->create('Artwork'); 
	if (isset($edit)){
		$word='Edit';
		echo $this->Form->input('id');
	}
	else{
		$word='Add';
	}
?>
	<fieldset>
		<legend><?php echo __($word.' Artwork'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('alttitle',array('label'=>'Alternate Titles'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Artworks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
