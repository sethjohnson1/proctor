<div class="relatedimages view">
<h2><?php echo __('Relatedimage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($relatedimage['Relatedimage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Casting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($relatedimage['Casting']['name'], array('controller' => 'castings', 'action' => 'view', $relatedimage['Casting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaster'); ?></dt>
		<dd>
			<?php echo $this->Html->link($relatedimage['Plaster']['name'], array('controller' => 'plasters', 'action' => 'view', $relatedimage['Plaster']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($relatedimage['Relatedimage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seq'); ?></dt>
		<dd>
			<?php echo h($relatedimage['Relatedimage']['seq']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Relatedimage'), array('action' => 'edit', $relatedimage['Relatedimage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Relatedimage'), array('action' => 'delete', $relatedimage['Relatedimage']['id']), array(), __('Are you sure you want to delete # %s?', $relatedimage['Relatedimage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Relatedimages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relatedimage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plasters'), array('controller' => 'plasters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plaster'), array('controller' => 'plasters', 'action' => 'add')); ?> </li>
	</ul>
</div>
