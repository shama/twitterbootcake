<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta('icon');
	echo $this->Html->css(array(
		'http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css',
		'/theme/bootstrap/css/admin',
	));
	echo $this->Html->script(array(
		'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
	));
	echo $scripts_for_layout;
	?>
</head>
<body>
<?php echo $this->element('topbar'); ?>
<div class="container-fluid">
	<?php if (!empty($sidebar)): ?>
		<div class="sidebar"><?php echo $sidebar; ?></div><!-- /.sidebar -->
	<?php endif; ?>
	<div class="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div><!-- /.content -->
	<footer class="text-right">
		<p><?php echo Configure::read('Bootstrap.footer') ? Configure::read('Bootstrap.footer') : '&copy; '.date('Y').' '.$this->Html->link('Kyle Robinson Young', 'http://dontkry.com'); ?></p>
	</footer>
</div><!-- /.container -->
<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>