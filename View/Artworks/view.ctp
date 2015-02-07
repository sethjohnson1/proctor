<div class="artworks view">
<h2><?php echo __('Artwork'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($artwork['Artwork']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artwork'), array('action' => 'edit', $artwork['Artwork']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Artwork'), array('action' => 'delete', $artwork['Artwork']['id']), array(), __('Are you sure you want to delete # %s?', $artwork['Artwork']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artwork'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Castings'); ?></h3>
	<?php if (!empty($artwork['Casting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artwork Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Plaster Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Castnumber'); ?></th>
		<th><?php echo __('Acqdate'); ?></th>
		<th><?php echo __('Creditline'); ?></th>
		<th><?php echo __('Metallurgy'); ?></th>
		<th><?php echo __('Xrf'); ?></th>
		<th><?php echo __('Provenance'); ?></th>
		<th><?php echo __('Dimensions'); ?></th>
		<th><?php echo __('Commentary'); ?></th>
		<th><?php echo __('Castingmethod'); ?></th>
		<th><?php echo __('Idnumbers'); ?></th>
		<th><?php echo __('Plasters'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	//debug($artwork['Casting']);
			foreach ($artwork['Casting'] as $casting): ?>
		<tr>
			<td><?php echo $casting['id']; ?></td>
			<td><?php echo $casting['artwork_id']; ?></td>
			<td><?php echo $casting['Owner']['owner']; ?></td>
			<td><?php echo $casting['plaster_id']; ?></td>
			<td><?php echo $casting['name']; ?></td>
			<td><?php echo $casting['castnumber']; ?></td>
			<td><?php echo $casting['acqdate']; ?></td>
			<td><?php echo $casting['creditline']; ?></td>
			<td><?php echo $casting['metallurgy']; ?></td>
			<td><?php echo $casting['xrf']; ?></td>
			<td><?php echo $casting['provenance']; ?></td>
			<td><?php echo $casting['dimensions']; ?></td>
			<td><?php echo $casting['commentary']; ?></td>
			<td><?php echo $casting['castingmethod']; ?></td>
			<td><?php echo $casting['idnumbers']; ?></td>
			<td><?php echo $casting['plasters']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'castings', 'action' => 'view', $casting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'castings', 'action' => 'edit', $casting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'castings', 'action' => 'delete', $casting['id']), array(), __('Are you sure you want to delete # %s?', $casting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
