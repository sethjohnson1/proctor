
<div class="castings form">
<?php echo $this->Form->create('Casting'); ?>
	<fieldset>
	<?if (isset($edit)) $word='Edit';
	else $word='Add';?>
		<legend><?php echo __($word.' Casting'); ?></legend>
	<?php
		if (isset($edit)){
			echo $this->Form->input('id');
		}
		else $relimg='';
		echo $this->Form->input('catalognumber');
		echo $this->Form->input('artwork_id');
		echo $this->Form->input('version');
		echo $this->Form->input('modeldate',array('label'=>'Date Modeled'));
		echo $this->Form->input('castdate',array('label'=>'Date Cast'));
		echo $this->Form->input('dimensions',array('type'=>'text'));
		echo $this->Form->input('micromeasurements',array('type'=>'text','label'=>'Micro-measurements'));
		echo $this->Form->input('forge_id');
		echo $this->Form->input('foundrymark');
		echo $this->Form->input('comments');
		echo $this->Form->input('castingmethod');
		echo $this->Form->input('castnumber');
		echo $this->Form->input('inscription');
		echo $this->Form->input('owner_id');
		echo $this->Form->input('accnum');
		echo $this->Form->input('creditline');
		echo $this->Form->input('acqdate');
		echo $this->Form->input('provenance');
		echo $this->Form->input('plaster_id');
		echo $this->Form->input('commentary');
		echo $this->Form->input('metallurgy');
		echo $this->Form->input('xrf');
		echo $this->Form->input('patina');
		echo $this->Form->input('Relatedimage.images',array('value'=>$relimg,'label'=>'Related Images'));
		echo $this->Form->input('signatures');
		echo $this->Form->input('copyright');
	/* these three fields weren't on the most recent spec sheet
		echo $this->Form->input('idnumbers');
		*/
		echo $this->Form->input('Exhibit');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

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
