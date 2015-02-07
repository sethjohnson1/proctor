<div class="owners index">
	<h2><?php echo __('Owners'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('oldid'); ?></th>
			<th><?php echo $this->Paginator->sort('owner'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('institution'); ?></th>
			<th><?php echo $this->Paginator->sort('attn_title'); ?></th>
			<th><?php echo $this->Paginator->sort('address_one'); ?></th>
			<th><?php echo $this->Paginator->sort('address_two'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('creditline'); ?></th>
			<th><?php echo $this->Paginator->sort('request'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($owners as $owner): ?>
	<tr>
		<td><?php echo h($owner['Owner']['id']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['oldid']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['owner']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['institution']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['attn_title']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['address_one']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['address_two']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['city']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['state']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['zip']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['phone']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['email']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['creditline']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['request']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['notes']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['created']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $owner['Owner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $owner['Owner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $owner['Owner']['id']), array(), __('Are you sure you want to delete # %s?', $owner['Owner']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
