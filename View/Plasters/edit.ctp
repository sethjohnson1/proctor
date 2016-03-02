<div class="plasters form">
<?php echo $this->Form->create('Plaster'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plaster'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Relatedimage.images',array('value'=>$relimg,'label'=>'Related Images'));
		echo $this->Form->input('commentary');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plaster.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Plaster.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plasters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relatedimages'), array('controller' => 'relatedimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relatedimage'), array('controller' => 'relatedimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
