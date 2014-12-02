<div class="tags view">
<h2><?php echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), array(), __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Picts'), array('controller' => 'picts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pict'), array('controller' => 'picts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Picts'); ?></h3>
	<?php if (!empty($tag['Pict'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Users Id'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Prisle'); ?></th>
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lon'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tag['Pict'] as $pict): ?>
		<tr>
			<td><?php echo $pict['id']; ?></td>
			<td><?php echo $pict['users_id']; ?></td>
			<td><?php echo $pict['url']; ?></td>
			<td><?php echo $pict['prisle']; ?></td>
			<td><?php echo $pict['lat']; ?></td>
			<td><?php echo $pict['lon']; ?></td>
			<td><?php echo $pict['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'picts', 'action' => 'view', $pict['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'picts', 'action' => 'edit', $pict['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'picts', 'action' => 'delete', $pict['id']), array(), __('Are you sure you want to delete # %s?', $pict['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pict'), array('controller' => 'picts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
