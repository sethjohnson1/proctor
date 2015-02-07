<div class="castings form">
<?php echo $this->Form->create('Casting'); ?>
	<fieldset>
		<legend><?php echo __('Edit Casting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('artwork_id');
		echo $this->Form->input('Relatedimage.images',array('value'=>$relimg,'label'=>'Related Images'));
		echo $this->Form->input('owner_id');
		echo $this->Form->input('plaster_id');
		echo $this->Form->input('forge_id');
		//echo $this->Form->input('name');
		echo $this->Form->input('castnumber');
		echo $this->Form->input('acqdate');
		echo $this->Form->input('castdate');
		echo $this->Form->input('inscription');
		echo $this->Form->input('signatures');
		echo $this->Form->input('foundrymark');
		echo $this->Form->input('copyright');
		echo $this->Form->input('accnum');
		echo $this->Form->input('creditline');
		echo $this->Form->input('metallurgy');
		echo $this->Form->input('xrf');
		echo $this->Form->input('provenance');
		echo $this->Form->input('dimensions');
		echo $this->Form->input('commentary');
		echo $this->Form->input('castingmethod');
		echo $this->Form->input('idnumbers');
		//echo $this->Form->input('plasters');
		echo $this->Form->input('Exhibit');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Casting.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Casting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Castings'), array('action' => 'index')); ?></li>
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
