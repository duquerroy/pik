<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($user['User']['token']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Picts'), array('controller' => 'picts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pict.user Id'), array('controller' => 'picts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Picts'); ?></h3>
	<?php if (!empty($user['pict.user_id'])): ?>
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
	<?php foreach ($user['pict.user_id'] as $pict): ?>
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
			<li><?php echo $this->Html->link(__('New Pict.user Id'), array('controller' => 'picts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
