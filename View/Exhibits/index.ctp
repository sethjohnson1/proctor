<div class="exhibits index">
	<h2><?php echo __('Exhibits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('title_abbreviated'); ?></th>
			<th><?php echo $this->Paginator->sort('institution'); ?></th>
			<th><?php echo $this->Paginator->sort('institution_abbreviated'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('oneman'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('excode'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($exhibits as $exhibit): ?>
	<tr>
		<td><?php echo h($exhibit['Exhibit']['id']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['title']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['title_abbreviated']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['institution']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['institution_abbreviated']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['city']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['oneman']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['created']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['modified']); ?>&nbsp;</td>
		<td><?php echo h($exhibit['Exhibit']['excode']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exhibit['Exhibit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exhibit['Exhibit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exhibit['Exhibit']['id']), array(), __('Are you sure you want to delete # %s?', $exhibit['Exhibit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Exhibit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('controller' => 'castings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('controller' => 'castings', 'action' => 'add')); ?> </li>
	</ul>
</div>
