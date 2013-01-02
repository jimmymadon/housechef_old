<div class="chefs index">
	<h2><?php echo __('Chefs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cooking_style'); ?></th>
			<th><?php echo $this->Paginator->sort('cooking_experience'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($chefs as $chef): ?>
	<tr>
		<td><?php echo h($chef['Chef']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chef['User']['id'], array('controller' => 'users', 'action' => 'view', $chef['User']['id'])); ?>
		</td>
		<td><?php echo h($chef['Chef']['cooking_style']); ?>&nbsp;</td>
		<td><?php echo h($chef['Chef']['cooking_experience']); ?>&nbsp;</td>
		<td><?php echo h($chef['Chef']['created']); ?>&nbsp;</td>
		<td><?php echo h($chef['Chef']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $chef['Chef']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $chef['Chef']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $chef['Chef']['id']), null, __('Are you sure you want to delete # %s?', $chef['Chef']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Chef'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dishes'), array('controller' => 'dishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dish'), array('controller' => 'dishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
