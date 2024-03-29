<div class="dishes index">
	<h2><?php echo __('Dishes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('chef_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($dishes as $dish): ?>
	<tr>
		<td><?php echo h($dish['Dish']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dish['Chef']['id'], array('controller' => 'chefs', 'action' => 'view', $dish['Chef']['id'])); ?>
		</td>
		<td><?php echo h($dish['Dish']['title']); ?>&nbsp;</td>
		<td><?php echo h($dish['Dish']['description']); ?>&nbsp;</td>
		<td><?php echo h($dish['Dish']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($dish['Dish']['price']); ?>&nbsp;</td>
		<td><?php echo h($dish['Dish']['created']); ?>&nbsp;</td>
		<td><?php echo h($dish['Dish']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dish['Dish']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dish['Dish']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dish['Dish']['id']), null, __('Are you sure you want to delete # %s?', $dish['Dish']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Dish'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Chefs'), array('controller' => 'chefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chef'), array('controller' => 'chefs', 'action' => 'add')); ?> </li>
	</ul>
</div>
