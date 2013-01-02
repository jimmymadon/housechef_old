<div class="dishes form">
<?php echo $this->Form->create('Dish'); ?>
	<fieldset>
		<legend><?php echo __('Add Dish'); ?></legend>
	<?php
		echo $this->Form->input('chef_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dishes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Chefs'), array('controller' => 'chefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chef'), array('controller' => 'chefs', 'action' => 'add')); ?> </li>
	</ul>
</div>
