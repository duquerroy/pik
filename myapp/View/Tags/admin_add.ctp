<div class="tags form">
<?php echo $this->Form->create('Tag'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Pict');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Picts'), array('controller' => 'picts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pict'), array('controller' => 'picts', 'action' => 'add')); ?> </li>
	</ul>
</div>
