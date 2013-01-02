<div class="chefs view">
<h2><?php  echo __('Chef'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chef['Chef']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($chef['User']['id'], array('controller' => 'users', 'action' => 'view', $chef['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooking Style'); ?></dt>
		<dd>
			<?php echo h($chef['Chef']['cooking_style']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooking Experience'); ?></dt>
		<dd>
			<?php echo h($chef['Chef']['cooking_experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($chef['Chef']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($chef['Chef']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chef'), array('action' => 'edit', $chef['Chef']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chef'), array('action' => 'delete', $chef['Chef']['id']), null, __('Are you sure you want to delete # %s?', $chef['Chef']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chefs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chef'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dishes'); ?></h3>
	<?php if (!empty($chef['Dish'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Chef Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($chef['Dish'] as $dish): ?>
		<tr>
			<td><?php echo $dish['id']; ?></td>
			<td><?php echo $dish['chef_id']; ?></td>
			<td><?php echo $dish['title']; ?></td>
			<td><?php echo $dish['description']; ?></td>
			<td><?php echo $dish['quantity']; ?></td>
			<td><?php echo $dish['price']; ?></td>
			<td><?php echo $dish['created']; ?></td>
			<td><?php echo $dish['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dishes', 'action' => 'view', $dish['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dishes', 'action' => 'edit', $dish['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dishes', 'action' => 'delete', $dish['id']), null, __('Are you sure you want to delete # %s?', $dish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
