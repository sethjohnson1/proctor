<div class="castingsExhibits view">
<h2><?php echo __('Castings Exhibit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($castingsExhibit['CastingsExhibit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Casting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($castingsExhibit['Casting']['name'], array('controller' => 'castings', 'action' => 'view', $castingsExhibit['Casting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exhibit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($castingsExhibit['Exhibit']['title'], array('controller' => 'exhibits', 'action' => 'view', $castingsExhibit['Exhibit']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Castings Exhibit'), array('action' => 'edit', $castingsExhibit['CastingsExhibit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Castings Exhibit'), array('action' => 'delete', $castingsExhibit['CastingsExhibit']['id']), array(), __('Are you sure you want to delete # %s?', $castingsExhibit['CastingsExhibit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings Exhibits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Castings Exhibit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exhibits'), array('controller' => 'exhibits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exhibit'), array('controller' => 'exhibits', 'action' => 'add')); ?> </li>
	</ul>
</div>
