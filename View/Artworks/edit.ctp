<div class="artworks form">
<?php echo $this->Form->create('Artwork'); ?>
	<fieldset>
		<legend><?php echo __('Edit Artwork'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Artwork.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Artwork.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
