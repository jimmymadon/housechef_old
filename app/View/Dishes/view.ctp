<div class="dishes view">
<h2><?php  echo __('Dish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chef'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dish['Chef']['id'], array('controller' => 'chefs', 'action' => 'view', $dish['Chef']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dish['Dish']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dish'), array('action' => 'edit', $dish['Dish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dish'), array('action' => 'delete', $dish['Dish']['id']), null, __('Are you sure you want to delete # %s?', $dish['Dish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chefs'), array('controller' => 'chefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chef'), array('controller' => 'chefs', 'action' => 'add')); ?> </li>
	</ul>
</div>
