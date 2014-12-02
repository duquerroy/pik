<div class="picts form">
<?php echo $this->Form->create('Pict'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pict'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('url');
		echo $this->Form->input('prisle');
		echo $this->Form->input('lat');
		echo $this->Form->input('lon');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pict.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pict.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Picts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
