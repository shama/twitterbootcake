<div class="<?php echo $pluralVar;?> form">
<?php
	echo $this->Form->create(null, array(
		'class' => 'form-stacked',
	));
	echo '<div class="clearfix">';
		$scaffoldValues = array_fill(0, sizeof($scaffoldFields), array(
			'class' => 'xlarge',
		));
		$scaffoldFields = array_combine($scaffoldFields, $scaffoldValues);
		echo $this->Form->inputs($scaffoldFields, array('created', 'modified', 'updated'));
		echo $this->Form->submit(__('Submit', true), array('class' => 'btn primary'));
	echo '</div>';
	echo $this->Form->end();
?>
</div>

<?php ob_start(); ?>
<div class="well">
	<h5><?php __('Actions'); ?></h5>
	<ul>
	<?php if ($this->action != 'add'):?>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value($modelClass.'.'.$primaryKey)), null, __('Are you sure you want to delete', true).' #' . $this->Form->value($modelClass.'.'.$primaryKey)); ?></li>
	<?php endif;?>
		<li><?php echo $this->Html->link(__('List', true).' '.$pluralHumanName, array('action' => 'index'));?></li>
	<?php
	$done = array();
	foreach ($associations as $_type => $_data) {
		foreach ($_data as $_alias => $_details) {
			if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
				echo "\t\t<li>" . $this->Html->link(sprintf(__('List %s', true), Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' =>'index')) . "</li>\n";
				echo "\t\t<li>" . $this->Html->link(sprintf(__('New %s', true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' =>'add')) . "</li>\n";
				$done[] = $_details['controller'];
			}
		}
	}
	?>
	</ul>
</div>
<?php $this->set('sidebar', ob_get_clean()); ?>