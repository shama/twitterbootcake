<div class="<?php echo $pluralVar;?> index">
<h2><?php echo $pluralHumanName;?></h2>
<table cellpadding="0" cellspacing="0" class="zebra-striped">
<tr>
<?php foreach ($scaffoldFields as $_field):?>
	<th><?php echo $this->Paginator->sort($_field);?></th>
<?php endforeach;?>
	<th><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach (${$pluralVar} as ${$singularVar}):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
echo "\n";
	echo "\t<tr{$class}>\n";
		foreach ($scaffoldFields as $_field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $_alias => $_details) {
					if ($_field === $_details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t" . $this->Html->link(${$singularVar}[$_alias][$_details['displayField']], array('controller' => $_details['controller'], 'action' => 'view', ${$singularVar}[$_alias][$_details['primaryKey']])) . "\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td>\n\t\t\t" . ${$singularVar}[$modelClass][$_field] . " \n\t\t</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t" . $this->Html->link(__('View', true), array('action' => 'view', ${$singularVar}[$modelClass][$primaryKey])) . "\n";
		echo "\t\t\t" . $this->Html->link(__('Edit', true), array('action' => 'edit', ${$singularVar}[$modelClass][$primaryKey])) . "\n";
		echo "\t\t\t" . $this->Html->link(__('Delete', true), array('action' => 'delete', ${$singularVar}[$modelClass][$primaryKey]), null, __('Are you sure you want to delete', true).' #' . ${$singularVar}[$modelClass][$primaryKey]) . "\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

endforeach;
echo "\n";
?>
</table>

<div class="pagination">
	<ul>
		<?php echo $this->Paginator->prev(
			__('&larr; Previous', true),
			array('class' => 'prev', 'escape' => false, 'tag' => 'li'),
			'<a href="#">&larr; Previous</a>',
			array('class' => 'prev disabled', 'escape' => false, 'tag' => 'li')
		);
		echo $this->Paginator->numbers(array(
			'tag' => 'li',
			'separator' => '',
		));
		echo $this->Paginator->next(
			__('Next &rarr;', true),
			array('class' => 'next disabled', 'escape' => false, 'tag' => 'li'),
			'<a href="#">Next &rarr;</a>',
			array('class' => 'next disabled', 'escape' => false, 'tag' => 'li')
		);
		?>
	</ul>
</div>

<?php ob_start(); ?>
<div class="well">
	<h5><?php __('Actions'); ?></h5>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), $singularHumanName), array('action' => 'add')); ?></li>
		<?php
		$done = array();
		foreach ($associations as $_type => $_data) {
			foreach ($_data as $_alias => $_details) {
				if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {
					echo "\t\t<li>" . $this->Html->link(sprintf(__('List %s', true), Inflector::humanize($_details['controller'])), array('controller' => $_details['controller'], 'action' => 'index')) . "</li>\n";
					echo "\t\t<li>" . $this->Html->link(sprintf(__('New %s', true), Inflector::humanize(Inflector::underscore($_alias))), array('controller' => $_details['controller'], 'action' => 'add')) . "</li>\n";
					$done[] = $_details['controller'];
				}
			}
		}
		?>
	</ul>
</div>
<?php $this->set('sidebar', ob_get_clean()); ?>