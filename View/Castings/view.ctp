<div class="castings view">
<h2><?php echo __('Casting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artwork'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casting['Artwork']['name'], array('controller' => 'artworks', 'action' => 'view', $casting['Artwork']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casting['Owner']['id'], array('controller' => 'owners', 'action' => 'view', $casting['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaster'); ?></dt>
		<dd>
			<?php echo $this->Html->link($casting['Plaster']['name'], array('controller' => 'plasters', 'action' => 'view', $casting['Plaster']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['name']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Castnumber'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['castnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acqdate'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['acqdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creditline'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['creditline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metallurgy'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['metallurgy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xrf'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['xrf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provenance'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['provenance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimensions'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['dimensions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commentary'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['commentary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Castingmethod'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['castingmethod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idnumbers'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['idnumbers']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plasters'); ?></dt>
		<dd>
			<?php echo h($casting['Casting']['plasters']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Casting'), array('action' => 'edit', $casting['Casting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Casting'), array('action' => 'delete', $casting['Casting']['id']), array(), __('Are you sure you want to delete # %s?', $casting['Casting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Castings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casting'), array('action' => 'add')); ?> </li>
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
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Relatedimages'); ?></h3>
	<?php if (!empty($casting['Relatedimage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Casting Id'); ?></th>
		<th><?php echo __('Plaster Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Seq'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($casting['Relatedimage'] as $relatedimage): ?>
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
<div class="related">
	<h3><?php echo __('Related Exhibits'); ?></h3>
	<?php if (!empty($casting['Exhibit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Title Abbreviated'); ?></th>
		<th><?php echo __('Institution'); ?></th>
		<th><?php echo __('Institution Abbreviated'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Oneman'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Excode'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($casting['Exhibit'] as $exhibit): ?>
		<tr>
			<td><?php echo $exhibit['id']; ?></td>
			<td><?php echo $exhibit['title']; ?></td>
			<td><?php echo $exhibit['title_abbreviated']; ?></td>
			<td><?php echo $exhibit['institution']; ?></td>
			<td><?php echo $exhibit['institution_abbreviated']; ?></td>
			<td><?php echo $exhibit['city']; ?></td>
			<td><?php echo $exhibit['start_date']; ?></td>
			<td><?php echo $exhibit['end_date']; ?></td>
			<td><?php echo $exhibit['oneman']; ?></td>
			<td><?php echo $exhibit['created']; ?></td>
			<td><?php echo $exhibit['modified']; ?></td>
			<td><?php echo $exhibit['excode']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exhibits', 'action' => 'view', $exhibit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exhibits', 'action' => 'edit', $exhibit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exhibits', 'action' => 'delete', $exhibit['id']), array(), __('Are you sure you want to delete # %s?', $exhibit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exhibit'), array('controller' => 'exhibits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
