<div class="users view">
<h2><?php  echo __('User'); ?></h2>
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
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($user['User']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['mobile_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($user['User']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chefs'), array('controller' => 'chefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chef'), array('controller' => 'chefs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Chefs'); ?></h3>
	<?php if (!empty($user['Chef'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Cooking Style'); ?></th>
		<th><?php echo __('Cooking Experience'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Chef'] as $chef): ?>
		<tr>
			<td><?php echo $chef['id']; ?></td>
			<td><?php echo $chef['user_id']; ?></td>
			<td><?php echo $chef['cooking_style']; ?></td>
			<td><?php echo $chef['cooking_experience']; ?></td>
			<td><?php echo $chef['created']; ?></td>
			<td><?php echo $chef['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'chefs', 'action' => 'view', $chef['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'chefs', 'action' => 'edit', $chef['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'chefs', 'action' => 'delete', $chef['id']), null, __('Are you sure you want to delete # %s?', $chef['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Chef'), array('controller' => 'chefs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
