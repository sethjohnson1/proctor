<div class="castings index">
	<h2><?php echo __('Castings'); ?></h2>
<?php
		echo $this->Form->create('Casting', array('url' => array_merge(array('action' => 'index'), $this->params['pass'])));
        echo $this->Form->input('searchdata', array('div' => false,'empty'=>true,'label'=>''));
        echo $this->Form->submit(__('Search', true), array('div' => false));
        echo $this->Form->end();
?>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('artwork_id'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('plaster_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('castnumber'); ?></th>
			<th><?php echo $this->Paginator->sort('acqdate'); ?></th>
			<th><?php echo $this->Paginator->sort('creditline'); ?></th>
			<th><?php echo $this->Paginator->sort('metallurgy'); ?></th>
			<th><?php echo $this->Paginator->sort('xrf'); ?></th>
			<th><?php echo $this->Paginator->sort('provenance'); ?></th>
			<th><?php echo $this->Paginator->sort('dimensions'); ?></th>
			<th><?php echo $this->Paginator->sort('commentary'); ?></th>
			<th><?php echo $this->Paginator->sort('castingmethod'); ?></th>
			<th><?php echo $this->Paginator->sort('idnumbers'); ?></th>
			<th><?php echo $this->Paginator->sort('plasters'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
	//debug($castings);
	foreach ($castings as $casting): ?>
	<tr>
		<td><?php echo h($casting['Casting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($casting['Artwork']['name'], array('controller' => 'artworks', 'action' => 'view', $casting['Artwork']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($casting['Owner']['owner'], array('controller' => 'owners', 'action' => 'view', $casting['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($casting['Plaster']['name'], array('controller' => 'plasters', 'action' => 'view', $casting['Plaster']['id'])); ?>
		</td>
		<td><?php echo h($casting['Casting']['name']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['castnumber']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['acqdate']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['creditline']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['metallurgy']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['xrf']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['provenance']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['dimensions']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['commentary']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['castingmethod']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['idnumbers']); ?>&nbsp;</td>
		<td><?php echo h($casting['Casting']['plasters']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $casting['Casting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $casting['Casting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $casting['Casting']['id']), array(), __('Are you sure you want to delete # %s?', $casting['Casting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Casting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Artworks'), array('controller' => 'artworks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artwork'), array('controller' => 'artworks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plasters'), array('controller' => 'plasters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plaster'), array('controller' => 'plasters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Relatedimages'), array('controller' => 'relatedimages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Relatedimage'), array('controller' => 'relatedimages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exhibits'), array('controller' => 'exhibits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exhibit'), array('controller' => 'exhibits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foundry'), array('controller' => 'forges', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foundries'), array('controller' => 'forges', 'action' => 'index')); ?> </li>
	</ul>
</div>
