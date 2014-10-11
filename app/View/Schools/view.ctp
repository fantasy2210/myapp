<div class="schools view">
<h2><?php echo __('School'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($school['School']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($school['School']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($school['School']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($school['School']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School'), array('action' => 'edit', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School'), array('action' => 'delete', $school['School']['id']), array(), __('Are you sure you want to delete # %s?', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($school['Student'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id']; ?></td>
			<td><?php echo $student['name']; ?></td>
			<td><?php echo $student['school_id']; ?></td>
			<td><?php echo $student['email']; ?></td>
			<td><?php echo $student['address']; ?></td>
			<td><?php echo $student['created']; ?></td>
			<td><?php echo $student['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), array(), __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
