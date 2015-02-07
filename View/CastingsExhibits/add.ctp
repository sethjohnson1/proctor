<div class="castingsExhibits form">
<?php echo $this->Form->create('CastingsExhibit'); ?>
	<fieldset>
		<legend><?php echo __('Add Castings Exhibit'); ?></legend>
	<?php
		echo $this->Form->input('casting_id');
		echo $this->Form->input('exhibit_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Castings Exhibits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exhibits'), array('controller' => 'exhibits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exhibit'), array('controller' => 'exhibits', 'action' => 'add')); ?> </li>
	</ul>
</div>
