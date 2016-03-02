<div class="owners view">
<h2><?php echo __('Owner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['oldid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institution'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['institution']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attn Title'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['attn_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address One'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['address_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Two'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['address_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creditline'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['creditline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['request']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Owner'), array('action' => 'edit', $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Owner'), array('action' => 'delete', $owner['Owner']['id']), array(), __('Are you sure you want to delete # %s?', $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Castings'); ?></h3>
	<?php if (!empty($owner['Casting'])): ?>
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
	<?php foreach ($owner['Casting'] as $casting): ?>
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
