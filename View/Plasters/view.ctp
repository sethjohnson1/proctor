<div class="plasters view">
<h2><?php echo __('Plaster'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plaster['Plaster']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plaster['Plaster']['name']); ?>
			&nbsp;
		</dd>


		<dt><?php echo __('Commentary'); ?></dt>
		<dd>
			<?php echo h($plaster['Plaster']['commentary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plaster'), array('action' => 'edit', $plaster['Plaster']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plaster'), array('action' => 'delete', $plaster['Plaster']['id']), array(), __('Are you sure you want to delete # %s?', $plaster['Plaster']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plasters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plaster'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relatedimages'), array('controller' => 'relatedimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relatedimage'), array('controller' => 'relatedimages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Castings'); ?></h3>
	<?php if (!empty($plaster['Casting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Artwork Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Plaster Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Image'); ?></th>
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
	<?php foreach ($plaster['Casting'] as $casting): ?>
		<tr>
			<td><?php echo $casting['id']; ?></td>
			<td><?php echo $casting['artwork_id']; ?></td>
			<td><?php echo $casting['owner_id']; ?></td>
			<td><?php echo $casting['plaster_id']; ?></td>
			<td><?php echo $casting['name']; ?></td>
			<td><?php echo $casting['image']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Relatedimages'); ?></h3>
	<?php if (!empty($plaster['Relatedimage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Casting Id'); ?></th>
		<th><?php echo __('Plaster Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Seq'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plaster['Relatedimage'] as $relatedimage): ?>
		<tr>
			<td><?php echo $relatedimage['id']; ?></td>
			<td><?php echo $relatedimage['casting_id']; ?></td>
			<td><?php echo $relatedimage['plaster_id']; ?></td>
			<td><?php echo $relatedimage['name']; ?></td>
			<td><?php echo $relatedimage['seq']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'relatedimages', 'action' => 'view', $relatedimage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'relatedimages', 'action' => 'edit', $relatedimage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'relatedimages', 'action' => 'delete', $relatedimage['id']), array(), __('Are you sure you want to delete # %s?', $relatedimage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Relatedimage'), array('controller' => 'relatedimages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
