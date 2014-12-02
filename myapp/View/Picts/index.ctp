<div class="picts index">
	<h2><?php echo __('Picts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('prisle'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('lon'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($picts as $pict): ?>
	<tr>
		<td><?php echo h($pict['Pict']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pict['User']['username'], array('controller' => 'users', 'action' => 'view', $pict['User']['id'])); ?>
		</td>
		<td><?php echo h($pict['Pict']['url']); ?>&nbsp;</td>
		<td><?php echo h($pict['Pict']['prisle']); ?>&nbsp;</td>
		<td><?php echo h($pict['Pict']['lat']); ?>&nbsp;</td>
		<td><?php echo h($pict['Pict']['lon']); ?>&nbsp;</td>
		<td><?php echo h($pict['Pict']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pict['Pict']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pict['Pict']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pict['Pict']['id']), array(), __('Are you sure you want to delete # %s?', $pict['Pict']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pict'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
