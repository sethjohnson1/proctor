<div class="exhibits form">
<?php echo $this->Form->create('Exhibit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exhibit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('title_abbreviated');
		echo $this->Form->input('institution');
		echo $this->Form->input('institution_abbreviated');
		echo $this->Form->input('city');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('oneman');
		echo $this->Form->input('excode');
		echo $this->Form->input('Casting');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Exhibit.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Exhibit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exhibits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
